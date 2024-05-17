<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalletaFortunaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/mensaje-galleta', [GalletaFortunaController::class, 'obtenerMensaje']);
