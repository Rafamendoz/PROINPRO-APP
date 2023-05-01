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


Route::post('/proyectoR/add', 'App\Http\Controllers\ProyectoController@setProyectoRest');
Route::get('/proyectoR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::put('/proyectoR/update/{id}', 'App\Http\Controllers\ProyectoController@putProyecto');
Route::get('/proyectos/', 'App\Http\Controllers\ProyectoController@getProyectos');



Route::get('/usuarioR/', 'App\Http\Controllers\UsuarioController@getUsuariosRest');
Route::get('/usuario/', 'App\Http\Controllers\UsuarioController@getUsuarios');
