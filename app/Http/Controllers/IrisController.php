<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

/**
 * Chat de "Iris", la asistente del Hostal Casa Arco Iris. Hace de proxy a OpenAI
 * con la ficha del hostal como system prompt. Sin sesión ni CSRF (la página se
 * sirve pública/cacheable): el navegador manda el historial reciente y el
 * servidor antepone el system. La clave de OpenAI vive solo aquí, nunca en el
 * cliente. Protegido con throttle por IP (en la ruta) y un tope global diario.
 */
class IrisController extends Controller
{
    public function chat(Request $request): JsonResponse
    {
        if (! config('iris.enabled')) {
            return $this->fallback();
        }

        $validator = Validator::make($request->all(), [
            'messages' => ['required', 'array', 'min:1', 'max:40'],
            'messages.*.role' => ['required', 'in:user,assistant'],
            'messages.*.content' => ['required', 'string', 'max:'.config('iris.limits.message_chars')],
            'website' => ['nullable', 'max:0'], // honeypot: los humanos no lo rellenan
        ]);
        if ($validator->fails()) {
            return response()->json(['reply' => $this->fallbackText()], 422);
        }
        $data = $validator->validated();

        // El último mensaje debe ser del visitante.
        $incoming = array_values(array_filter($data['messages'], fn ($m) => in_array($m['role'], ['user', 'assistant'], true)));
        $last = end($incoming);
        if (! $last || $last['role'] !== 'user' || trim(strip_tags($last['content'])) === '') {
            return response()->json(['reply' => $this->fallbackText()], 422);
        }

        // Tope diario global: si alguien abusa, el gasto queda acotado.
        $dayKey = 'iris.daily.'.now()->toDateString();
        Cache::add($dayKey, 0, now()->endOfDay());
        if (Cache::increment($dayKey) > config('iris.limits.daily_messages')) {
            return $this->fallback();
        }

        $reply = $this->ask($incoming);

        return response()->json(['reply' => $reply ?? $this->fallbackText()]);
    }

    /** Llama a OpenAI. Devuelve el texto o null si no responde. */
    private function ask(array $incoming): ?string
    {
        if (! config('iris.openai.key')) {
            Log::warning('[iris] Falta OPENAI_API_KEY');

            return null;
        }

        $system = config('iris.system').config('iris.kb');

        $history = [];
        foreach (array_slice($incoming, -config('iris.limits.history_messages')) as $m) {
            $text = trim(preg_replace('/\s+/u', ' ', strip_tags((string) $m['content'])));
            if ($text !== '') {
                $history[] = ['role' => $m['role'], 'content' => mb_substr($text, 0, config('iris.limits.message_chars'))];
            }
        }

        $payload = array_merge([['role' => 'system', 'content' => $system]], $history);
        $data = $this->call($payload);
        if ($data === null) {
            return null;
        }

        $text = trim((string) data_get($data, 'choices.0.message.content', ''));

        return $text !== '' ? $text : null;
    }

    private function call(array $messages): ?array
    {
        $model = (string) config('iris.openai.model');
        $body = [
            'model' => $model,
            'messages' => $messages,
            'max_completion_tokens' => config('iris.openai.max_output_tokens'),
        ];
        // Modelos de razonamiento (gpt-5*, o*): esfuerzo mínimo = rápido y barato.
        if (preg_match('/^(gpt-5|o\d)/', $model) && config('iris.openai.reasoning_effort')) {
            $body['reasoning_effort'] = config('iris.openai.reasoning_effort');
        }

        try {
            $resp = $this->post($body);

            // Si el modelo no admite ese reasoning_effort, se reintenta sin él.
            if ($resp->status() === 400 && isset($body['reasoning_effort']) && str_contains($resp->body(), 'reasoning_effort')) {
                unset($body['reasoning_effort']);
                $resp = $this->post($body);
            }
            // Modelos clásicos usan max_tokens en vez de max_completion_tokens.
            if ($resp->status() === 400 && str_contains($resp->body(), 'max_tokens')) {
                $body['max_tokens'] = $body['max_completion_tokens'];
                unset($body['max_completion_tokens']);
                $resp = $this->post($body);
            }

            if (! $resp->successful()) {
                Log::warning('[iris] OpenAI '.$resp->status().': '.mb_substr($resp->body(), 0, 500));

                return null;
            }

            return $resp->json();
        } catch (\Throwable $e) {
            Log::warning('[iris] OpenAI no responde: '.$e->getMessage());

            return null;
        }
    }

    private function post(array $body): \Illuminate\Http\Client\Response
    {
        return Http::withToken((string) config('iris.openai.key'))
            ->timeout(config('iris.openai.timeout'))
            ->acceptJson()
            ->post(rtrim((string) config('iris.openai.url'), '/').'/chat/completions', $body);
    }

    private function fallback(): JsonResponse
    {
        return response()->json(['reply' => $this->fallbackText()]);
    }

    private function fallbackText(): string
    {
        $phone = config('iris.phone');

        return "Ahora mismo no puedo responderte aquí 😅 Pero te atendemos encantados por teléfono: 📞 {$phone}.";
    }
}
