<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/generos', \App\Http\Controllers\API\V1\GenreController::class)->parameters([
    'generos' => 'genre'
]);

Route::apiResource('v1/paises', \App\Http\Controllers\API\V1\CountryController::class)->parameters([
    'paises' => 'country'
]);

Route::apiResource('v1/bandas', \App\Http\Controllers\API\V1\BandController::class)->parameters([
    'bandas' => 'band'
]);
