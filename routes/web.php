<?php

use Admin\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\ProjetoController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Site\ListaProjetoController;

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

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/projetos', [ListaProjetoController::class, 'index'])->name('site.projetos');
Route::get('/projetos/{id}', [ListaProjetoController::class, 'show'])->name('site.projetos.visualizar');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('post.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/admin/index', [HomeController::class, 'index'])->name('admin.index');

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
    Route::post('/cursos/cadastrar', [CursoController::class, 'store'])->name('admin.cursos.cadastrar');
    Route::get('/cursos/editar/{id}', [CursoController::class, 'edit'])->name('admin.cursos.editar');
    Route::put('/cursos/editar/{id}', [CursoController::class, 'update'])->name('admin.cursos.editar');
    Route::delete('/cursos/deletar/{id}', [CursoController::class, 'destroy'])->name('admin.cursos.deletar');

    Route::get('/projetos', [ProjetoController::class, 'index'])->name('admin.projetos.index');
    Route::get('/projetos/cadastrar', [ProjetoController::class, 'create'])->name('admin.projetos.cadastrar');
    Route::post('/projetos/cadastrar', [ProjetoController::class, 'store'])->name('admin.projetos.cadastrar');
    Route::get('/projetos/editar/{id}', [ProjetoController::class, 'edit'])->name('admin.projetos.editar');
    Route::put('/projetos/editar/{id}', [ProjetoController::class, 'update'])->name('admin.projetos.editar');
    Route::delete('/projetos/deletar/{id}', [ProjetoController::class, 'destroy'])->name('admin.projetos.deletar');
});
