<?php

use App\Http\Controllers\JogadorController;
use Illuminate\Support\Facades\Route;

Route::prefix('jogadores')->controller(JogadorController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{jogador}', 'show');
    Route::post('/', 'store');
    Route::patch('{jogador}', 'update');
    Route::delete('{jogador}', 'destroy');
});
