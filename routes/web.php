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

Route::get('/admin', function () {
    return view('uploadfiles');
});

/*Route::get('/', 'App\Http\Controllers\DropzoneController@store')->name('dropzone.store');*/

Route::resource('/admin/files','App\Http\Controllers\FileController');

Route::get("/test", function (){
    return view('test');
});

Route::post('validate', 'App\Http\Controllers\LoginController@login')->name('validate');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');



Route::get("/login", function (){
    return view('index');
})->name('login');


Route::get("/insert", function (){
    return view('insertUsuario');
});
Route::get("/list", function (){
    return view('listarUsuario');
});





//RUTAS PARA LA ENTIDAD PROYECTO
 
Route::get('proyecto/{id}', 'App\Http\Controllers\ProyectoController@getProyectoById');
Route::get('proyectosR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::get('proyectos/', 'App\Http\Controllers\ProyectoController@getProyectos')->middleware('auth');



Route::get('/usuarioR/', 'App\Http\Controllers\UsuarioController@getUsuariosRest');
Route::get('/usuario/', 'App\Http\Controllers\UsuarioController@getUsuarios');
Route::get('/download/{id}/{filename}', 'App\Http\Controllers\FileController@download');
Route::get('/delete/{id}/{filename}', 'App\Http\Controllers\FileController@destroy');




