<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::group([], __DIR__ . '/apis/equipe.php');
    Route::group([], __DIR__ . '/apis/jogador.php');
    Route::group([], __DIR__ . '/apis/confronto.php');
    Route::group([], __DIR__ . '/apis/evento.php');
});
