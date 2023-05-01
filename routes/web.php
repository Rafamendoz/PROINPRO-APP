<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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
    return view('usuarios');
});

/*Route::get('/', 'App\Http\Controllers\DropzoneController@store')->name('dropzone.store');*/

Route::resource('/admin/files','App\Http\Controllers\FileController');

Route::get("/test", function (){
    return view('test');
});
