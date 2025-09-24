<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importamos el controlador de Clase
use App\Http\Controllers\ClaseController;

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

// Rutas para tu API de Clases
Route::post('/clases', [ClaseController::class, 'guardar']);
Route::get('/clases', [ClaseController::class, 'listar']);
Route::delete('/clases/{id}', [ClaseController::class, 'eliminar']);