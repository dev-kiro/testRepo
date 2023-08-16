<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\centrosController;
use App\Http\Controllers\documentosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SistratController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/leer', [centrosController::class, 'traerTodos']); //LARAVEL8-> 'centrosController@traerTodos');
Route::get('/leer/{id}', [centrosController::class, 'traerDatosId']);

Route::get('/sidoc/{id}', [documentosController::class, 'traerDatosId']);
Route::get('/sidoc/user/{email}', [UsuariosController::class, 'traerDatosUsuario']);

Route::get('/sidoc/sdoc/{sdoc}/{ano}', [documentosController::class, 'traerDocumentoPorS']);

Route::get('/centros-sistrat/{id}', [SistratController::class, 'traerDatosCentroId']);


https://apidev.senda.gob.cl/api/sidoc/user/aquiroz@senda.gob.cl

/**
 * esto es del dev 2 y quiero subirlo y hacer match 
 */