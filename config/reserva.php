<?php

/*
 * Solicitudes de reserva/contacto del hostal. El formulario POSTea de verdad a
 * /reserva: se guarda un registro (jsonl en storage) y, si hay correo
 * configurado, se envía un aviso. El canal inmediato para el huésped es el
 * botón de WhatsApp al teléfono real del hostal.
 */
return [
    'enabled' => env('RESERVA_ENABLED', true),

    // A dónde llega el aviso de cada solicitud (buzón de la agencia por defecto).
    'notify_to' => env('RESERVA_NOTIFY', 'administracion@hawkins.es'),

    // Teléfono real del hostal (tel: y WhatsApp).
    'phone' => '+34 659 904 200',
    'whatsapp' => '34659904200',
];
