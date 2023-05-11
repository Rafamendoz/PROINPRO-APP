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



//RUTAS PUBLICAS
Route::get("/login", function (){
    return view('index');
})->name('login');

Route::post('validate', 'App\Http\Controllers\LoginController@login')->name('validate');


Route::middleware('auth')->group(function(){
    Route::middleware('Admin')->group(function(){
    Route::get("usuario/insert",'App\Http\Controllers\UsuarioController@loadList')->name("insertarUsuario");
    Route::get("usuario/update/{id}",'App\Http\Controllers\UsuarioController@loadListUpdateUsuario')->name("actualizarUsuario");

    Route::get('/usuarioR/', 'App\Http\Controllers\UsuarioController@getUsuariosRest');
    Route::get('usuarios/activos', 'App\Http\Controllers\UsuarioController@getUsuariosActivos')->name('getUsuariosActivos');
    Route::get('usuarios/inactivos', 'App\Http\Controllers\UsuarioController@getUsuariosInaActivos')->name('getUsuariosInactivos');
    
    
    


    });
});


Route::middleware('auth')->group(function(){
Route::get('/admin/{id}', function () {
    return view('uploadfiles');
})->name('upArchivos');

Route::resource('/admin/files','App\Http\Controllers\FileController');

Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::get("/createProyect","App\Http\Controllers\ProyectoController@loadList")->name('crearProyecto');
Route::get("/profile/{id}", 'App\Http\Controllers\ModelHasRolesController@getRoleByIdUser'
)->name('Profile');
Route::get("estado", 'App\Http\Controllers\EstadoController@getEstados')->name('estados');
 
Route::get('proyecto/{id}', 'App\Http\Controllers\ProyectoController@getProyectoById');
Route::get('proyectosR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::get('proyectos/', 'App\Http\Controllers\ProyectoController@getProyectos')->name('getProyectos');

Route::get('/download/{id}/{filename}', 'App\Http\Controllers\FileController@download');
Route::get('/delete/{id}/{filename}', 'App\Http\Controllers\FileController@destroy');



});
















//RUTAS PARA LA ENTIDAD PROYECTO

