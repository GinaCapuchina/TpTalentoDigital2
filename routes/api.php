<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NivelDeUrgenciaController;
use App\Http\Controllers\PersonaController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// /api/niveles_de_urgencia

Route::get('/niveles_de_urgencia',[NivelDeUrgenciaController:: class, 'listar']); 
Route::get('/niveles_de_urgencia/{id}', [NivelDeUrgenciaController:: class, 'obtenerUno']);
Route::post('/niveles_de_urgencia', [NivelDeUrgenciaController:: class, 'agregar']);
Route::put('/niveles_de_urgencia/{id}', [NivelDeUrgenciaController:: class, 'actualizar']);
Route::delete('/niveles_de_urgencia/{id}', [NivelDeUrgenciaController::class, 'borrar']);

// /api/personas

Route::get('/personas',[PersonaController:: class, 'listar']); 
Route::get('/personas/{id}', [PersonaController:: class, 'obtenerUno']);
Route::post('/personas', [PersonaController:: class, 'agregar']);
Route::put('/personas/{id}', [PersonaController:: class, 'actualizar']);
Route::delete('/personas/{id}', [PersonaController::class, 'borrar']);