<?php

use Admin\UsuariosController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
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



Route::prefix('/admin')->group(function(){

    // Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home.index');

    Route::get('/usuarios', [UserController::class, 'index'])->name('admin.usuarios.index');
    Route::get('/usuarios/visualizar/{id}', [UserController::class, 'show'])->name('admin.usuarios.visualizar');
    Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('admin.usuarios.cadastrar');
    Route::post('/usuarios/cadastrar', [UserController::class, 'store'])->name('admin.usuarios.cadastrar');
    Route::get('/usuarios/editar/{id}', [UserController::class, 'edit'])->name('admin.usuarios.editar');
    Route::put('/usuarios/editar/{id}', [UserController::class, 'update'])->name('admin.usuarios.editar');
    Route::delete('/usuarios/deletar/{id}', [UserController::class, 'destroy'])->name('admin.usuarios.deletar');


    Route::get('/categorias', [CategoriaController::class, 'index'])->name('admin.categorias.index');
    Route::get('/categorias/cadastrar', [CategoriaController::class, 'create'])->name('admin.categorias.cadastrar');
    Route::post('/categorias/cadastrar', [CategoriaController::class, 'store'])->name('admin.categorias.cadastrar');
    Route::get('/categorias/editar/{id}', [CategoriaController::class, 'edit'])->name('admin.categorias.editar');
    Route::put('/categorias/editar/{id}', [CategoriaController::class, 'update'])->name('admin.categorias.editar');
    Route::delete('/categorias/deletar/{id}', [CategoriaController::class, 'destroy'])->name('admin.categorias.deletar');


    Route::get('/cursos', [CursoController::class, 'index'])->name('admin.cursos.index');
    Route::get('/cursos/cadastrar', [CursoController::class, 'create'])->name('admin.cursos.cadastrar');
    Route::put('/cursos/cadastrar', [CursoController::class, 'store'])->name('admin.cursos.cadastrar');
    Route::get('/cursos/editar/{id}', [CursoController::class, 'edit'])->name('admin.cursos.editar');
    Route::put('/cursos/editar/{id}', [CursoController::class, 'update'])->name('admin.cursos.editar');
    Route::delete('/cursos/deletar/{id}', [CursoController::class, 'destroy'])->name('admin.cursos.deletar');

});

