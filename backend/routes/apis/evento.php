<?php

use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

Route::prefix('eventos')->controller(EventoController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{evento}', 'show');
    Route::post('/', 'store');
    Route::patch('{evento}', 'update');
    Route::delete('{evento}', 'destroy');
});
