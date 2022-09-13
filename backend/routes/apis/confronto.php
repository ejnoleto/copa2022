<?php

use App\Http\Controllers\ConfrontoController;
use Illuminate\Support\Facades\Route;

Route::prefix('confrontos')->controller(ConfrontoController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{confronto}', 'show');
    Route::post('/', 'store');
    Route::patch('{confronto}', 'update');
    Route::delete('{confronto}', 'destroy');
});
