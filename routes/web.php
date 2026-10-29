<?php

use App\Http\Controllers\IrisController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Chat de Iris (IA). Sin CSRF (ver bootstrap/app.php), throttle por IP.
Route::post('/iris/chat', [IrisController::class, 'chat'])->middleware('throttle:20,1');

// Solicitud de reserva/contacto (envío real). Sin CSRF, throttle por IP.
Route::post('/reserva', [ReservaController::class, 'store'])->middleware('throttle:10,1');
