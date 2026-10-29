<?php

/*
 * Iris: asistente virtual (IA de texto) del Hostal Casa Arco Iris.
 * El backend hace de proxy a OpenAI (Chat Completions) con la ficha del hostal
 * como system prompt. La clave vive SOLO en el servidor (env), nunca en el
 * cliente. Mismo proveedor y clave que "Carolina" (hawkinsweb).
 */
return [

    'enabled' => env('IRIS_ENABLED', true),

    'openai' => [
        'key' => env('OPENAI_API_KEY'),
        'url' => env('OPENAI_BASE_URL', 'https://api.openai.com/v1'),
        // Modelo de texto barato de OpenAI. Se cambia por env sin tocar código.
        'model' => env('IRIS_MODEL', 'gpt-5-nano'),
        // Modelos de razonamiento (gpt-5*, o*): 'minimal' = respuesta rápida y barata.
        'reasoning_effort' => env('IRIS_REASONING_EFFORT', 'minimal'),
        'max_output_tokens' => (int) env('IRIS_MAX_OUTPUT_TOKENS', 600),
        'timeout' => (int) env('IRIS_TIMEOUT', 30),
    ],

    // Límites para acotar el gasto y el abuso (es una demo pública).
    'limits' => [
        'message_chars' => 600,          // longitud máxima de cada mensaje del visitante
        'history_messages' => 12,        // mensajes recientes que se envían al modelo
        'daily_messages' => (int) env('IRIS_DAILY_CAP', 800), // tope global diario
    ],

    'phone' => '+34 659 904 200',

    // Ficha de grounding (copiada del prototipo). Solo se responde con esto.
    'kb' => <<<'KB'
CASA ARCO IRIS — Hostal familiar en Los Caños de Meca (Barbate, Cádiz).
UBICACIÓN: Avenida de Trafalgar, Calle Hibisco s/n, 11159 Los Caños de Meca (Barbate), Cádiz. En el centro del pueblo, entre el Parque Natural de La Breña y el mar, a unos 50 metros de la playa. Coordenadas 36.184621, -6.005877. Los Caños está entre Cádiz capital (~60 km) y Tarifa (~50 km). La costa de África se ve la mayoría de los días (~40 km).
HABITACIONES: 11 habitaciones modernas, alegres y confortables, dobles o individuales, todas con baño privado. Equipamiento: TV, aire acondicionado, acceso 24 h. (No hay precios publicados: para tarifas y disponibilidad, llamar al +34 659 904 200.)
SERVICIOS E INSTALACIONES: parking propio, piscina al aire libre, jardín, "choza artesana" con office común (microondas, cafetera, tostador, hervidor y neveras con espacio por habitación), zonas WiFi, porches, camas balinesas, terrazas con vistas y puestas de sol. IMPORTANTE: no hay cocina para cocinar; la choza es solo para prepararse el desayuno o algo ligero.
ENTORNO: unos 300 días de sol al año; playas extensas de arena fina y dorada, muchas casi desérticas; Parque Natural de La Breña (senderismo entre pinos); Cabo y faro de Trafalgar (batalla de 1805); pesca del atún de almadraba con más de 2000 años de historia.
ACTIVIDADES: surf y paddle (zona apartamentos, pequeña LULU y zona faro), kitesurf (zona faro), windsurf; mejores olas de mediados de septiembre a primavera; escuelas de surf en la playa de El Palmar (a unos minutos) en verano; rutas a caballo por playa y parque; alquiler de kayak, paddle y surf; yoga en la playa; masajes; avistamiento de cetáceos en Tarifa; senderismo por La Breña.
CONTACTO: Teléfono +34 659 904 200. Dirección arriba. Valoración 4,7★ con 193 opiniones en Google. Registro de Turismo de Andalucía H/CA701432. Idiomas: español e inglés.
RESERVAS: se gestionan por teléfono (+34 659 904 200) o por el formulario de contacto de la web.
KB,

    'system' => <<<'SYS'
Eres "Iris", la asistente virtual del Hostal Casa Arco Iris (Los Caños de Meca, Cádiz). Hablas de forma cercana, cálida y breve, como alguien del hostal. Responde SOLO con la información de la ficha de abajo. Si te preguntan algo que no está en la ficha (por ejemplo precios exactos o disponibilidad de fechas concretas), dilo con naturalidad e invita a llamar al +34 659 904 200 o a usar el formulario. Responde en el mismo idioma en que te escriba el huésped. No inventes datos. Usa 1-2 emojis como mucho.

FICHA DEL HOSTAL:
SYS,
];
