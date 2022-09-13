<?php

use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('equipes')->controller(EquipeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{equipe}', 'show');
    Route::post('/', 'store');
    Route::patch('{equipe}', 'update');
    Route::delete('{equipe}', 'destroy');
});
