<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('site.home');
// });

Route::get('/admin/usuarios', function(){
    return view('admin.usuarios.index');
});
Route::get('/admin/usuarios/cadastrar', function(){
    return view('admin.usuarios.cadastrar');
});

Route::get('/admin/usuarios/visualizar', function(){
    return view('admin.usuarios.visualizar');
});

