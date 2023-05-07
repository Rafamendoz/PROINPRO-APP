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

//RUTAS PARA LA ENTIDAD PROYECTO

Route::post('/proyectoR/add', 'App\Http\Controllers\ProyectoController@setProyecto');
Route::get('/proyectosR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::put('/proyectoR/update/{id}', 'App\Http\Controllers\ProyectoController@putProyecto');
Route::get('/proyectoR/{id}', 'App\Http\Controllers\ProyectoController@getProyectoRestById');



//RUTAS PARA LA ENTIDAD USUARIO

Route::post('usuarioR/add', 'App\Http\Controllers\UsuarioController@setUsuario');
Route::get('usuarioR/{user}', 'App\Http\Controllers\UsuarioController@getUsuarioRestByUser');
Route::get('usuariosR','App\Http\Controllers\UsuarioController@getUsuariosRest');
Route::put('usuariosR/update/{user}','App\Http\Controllers\UsuarioController@putUsuario');

Route::get('usuarioR/assing/role','App\Http\Controllers\UsuarioController@asignarRol');

//RUTAS PARA LA ENTIDAD ESTADO
Route::get('/estadosR/', 'App\Http\Controllers\EstadoController@getEstadosRest');
Route::get('/estadoR/{id}', 'App\Http\Controllers\EstadoController@getEstadoRestById');
Route::post('estadoR/add', 'App\Http\Controllers\EstadoController@setEstado');
Route::put('estadoR/update/{id}', 'App\Http\Controllers\EstadoController@putEstado');
Route::delete('estadoR/delete/{id}', 'App\Http\Controllers\EstadoController@deleteEstado');




//RUTAS PARA LA ENTIDAD ROL
Route::get('/rolesR/', 'App\Http\Controllers\RolController@getRolesRest');
Route::get('/rolesR/{id}', 'App\Http\Controllers\RolController@getEstadoRestById');
Route::post('rolesR/add', 'App\Http\Controllers\RolController@setRol');
Route::put('rolesR/update/{id}', 'App\Http\Controllers\RolController@putEstado');
Route::delete('rolesR/delete/{id}', 'App\Http\Controllers\RolController@deleteEstado');