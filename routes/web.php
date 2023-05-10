<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/{id}', function () {
    return view('uploadfiles');
})->name('upArchivos');


Route::resource('/admin/files','App\Http\Controllers\FileController');



Route::post('validate', 'App\Http\Controllers\LoginController@login')->name('validate');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');



Route::get("/login", function (){
    return view('index');
})->name('login');


Route::get("usuario/insert",'App\Http\Controllers\UsuarioController@loadList'
)->name("insertarUsuario");


Route::get("/createProyect","App\Http\Controllers\ProyectoController@loadList")->name('crearProyecto');

Route::get("/profile", function (){
    return view('profile');
})->name('Profile');

Route::get("estado", function (){
    return view('estado');
})->name("Estados");

//RUTAS PARA LA ENTIDAD PROYECTO
 
Route::get('proyecto/{id}', 'App\Http\Controllers\ProyectoController@getProyectoById');
Route::get('proyectosR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::get('proyectos/', 'App\Http\Controllers\ProyectoController@getProyectos')->middleware('auth')->name('getProyectos');



Route::get('/usuarioR/', 'App\Http\Controllers\UsuarioController@getUsuariosRest');
Route::get('usuarios/', 'App\Http\Controllers\UsuarioController@getUsuarios')->name('getUsuario');
Route::get('/download/{id}/{filename}', 'App\Http\Controllers\FileController@download');
Route::get('/delete/{id}/{filename}', 'App\Http\Controllers\FileController@destroy');