<?php

use App\Http\Controllers\IrisController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Chat de Iris (IA). Sin CSRF (ver bootstrap/app.php), throttle por IP.
Route::post('/iris/chat', [IrisController::class, 'chat'])->middleware('throttle:20,1');
