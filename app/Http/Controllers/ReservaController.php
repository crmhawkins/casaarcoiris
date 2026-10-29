<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

/**
 * Solicitudes de reserva/contacto. El formulario envía DE VERDAD: se valida, se
 * guarda un registro (jsonl en storage) y, si hay correo configurado, se manda
 * un aviso. Nunca se pierde una solicitud: si el correo falla, igual queda
 * registrada y el visitante recibe confirmación. Sin CSRF (página pública),
 * throttle por IP y honeypot.
 */
class ReservaController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        if (! config('reserva.enabled')) {
            return response()->json(['ok' => false, 'message' => 'Las solicitudes están temporalmente deshabilitadas. Llámanos al '.config('reserva.phone').'.'], 503);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'fechas' => ['nullable', 'string', 'max:160'],
            'personas' => ['nullable', 'string', 'max:80'],
            'mensaje' => ['nullable', 'string', 'max:1500'],
            'website' => ['nullable', 'max:0'], // honeypot
        ]);
        if ($validator->fails()) {
            return response()->json(['ok' => false, 'message' => 'Revisa los datos: necesitamos al menos tu nombre y un email válido.'], 422);
        }
        $data = $validator->validated();

        $record = [
            'fecha' => now()->toDateTimeString(),
            'nombre' => trim(strip_tags($data['nombre'])),
            'email' => trim($data['email']),
            'fechas' => trim(strip_tags($data['fechas'] ?? '')),
            'personas' => trim(strip_tags($data['personas'] ?? '')),
            'mensaje' => trim(strip_tags($data['mensaje'] ?? '')),
            'ip_hash' => hash('sha256', $request->ip().'|'.config('app.key')),
        ];

        // 1) Se guarda SIEMPRE (no se pierde ninguna solicitud).
        try {
            $path = storage_path('app/reservas.jsonl');
            file_put_contents($path, json_encode($record, JSON_UNESCAPED_UNICODE).PHP_EOL, FILE_APPEND | LOCK_EX);
        } catch (\Throwable $e) {
            Log::warning('[reserva] No se pudo guardar el registro: '.$e->getMessage());
        }

        // 2) Aviso por correo (si el mailer está configurado). Si falla, no rompe.
        $to = config('reserva.notify_to');
        if ($to) {
            try {
                $body = "Nueva solicitud de reserva desde la web de Casa Arco Iris\n\n"
                    ."Nombre:   {$record['nombre']}\n"
                    ."Email:    {$record['email']}\n"
                    ."Fechas:   ".($record['fechas'] ?: '—')."\n"
                    ."Personas: ".($record['personas'] ?: '—')."\n"
                    ."Mensaje:  ".($record['mensaje'] ?: '—')."\n\n"
                    ."Fecha: {$record['fecha']}";
                Mail::raw($body, function ($m) use ($to, $record) {
                    $m->to($to)
                        ->replyTo($record['email'], $record['nombre'])
                        ->subject('Reserva web · Casa Arco Iris · '.$record['nombre']);
                });
            } catch (\Throwable $e) {
                Log::warning('[reserva] No se pudo enviar el aviso por correo: '.$e->getMessage());
            }
        }

        return response()->json([
            'ok' => true,
            'message' => '¡Gracias, '.$record['nombre'].'! Hemos recibido tu solicitud y te contestaremos muy pronto. Si tienes prisa, llámanos o escríbenos al '.config('reserva.phone').'. 🌈',
        ]);
    }
}
