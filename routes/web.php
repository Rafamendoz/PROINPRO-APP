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


Route::get("/", function (){
    return view('index');
});


Route::get("/insert", function (){
    return view('insertUsuario');
});
Route::get("/list", function (){
    return view('listarUsuario');
});


Route::get("/proyectos", function (){
    return view('proyectos');
});

Route::get('/token', function (Request $request) {

    $token = $request->session()->token();
 
    $token = csrf_token();
    return $token;
 
    // ...
});

Route::get('/proyecto/{id}', 'App\Http\Controllers\ProyectoController@getProyectoRestById');
Route::post('/proyectoR/add', 'App\Http\Controllers\ProyectoController@setProyectoRest');
Route::get('/proyectoR/', 'App\Http\Controllers\ProyectoController@getProyectosRest');
Route::put('/proyectoR/update/{id}', 'App\Http\Controllers\ProyectoController@putProyecto');
Route::get('/proyectos/', 'App\Http\Controllers\ProyectoController@getProyectos');



Route::get('/usuarioR/', 'App\Http\Controllers\UsuarioController@getUsuariosRest');
Route::get('/usuario/', 'App\Http\Controllers\UsuarioController@getUsuarios');

