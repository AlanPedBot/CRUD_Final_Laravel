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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [\App\Http\Controllers\UserController::class, 'viewRegister'])->name('site.register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('site.register');

Route::get('/login/{erro?}', [\App\Http\Controllers\UserController::class, 'viewLogin'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('site.login');

Route::get('/forgot', [\App\Http\Controllers\UserController::class, 'viewForgot'])->name('site.forgot');
Route::post('/forgot', [\App\Http\Controllers\UserController::class, 'forgot'])->name('site.forgot');

Route::prefix('/biblioteca')->group(function () {

    Route::middleware('authentication')->get('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create');
    Route::middleware('authentication')->post('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create');

    Route::middleware('authentication')->get('/home', [\App\Http\Controllers\BookController::class, 'home'])->name('site.home');

    Route::middleware('authentication')->get('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read');
    Route::middleware('authentication')->post('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read');

    Route::middleware('authentication')->get('/{id}/editar', [\App\Http\Controllers\BookController::class, 'edit'])->name('site.edit');
    Route::middleware('authentication')->put('/{id}/editar', [\App\Http\Controllers\BookController::class, 'update'])->name('site.update');

    Route::middleware('authentication')->delete('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete');
    Route::middleware('authentication')->get('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete');
});
Route::middleware('authentication')->get('/sair', [\App\Http\Controllers\UserController::class, 'exit'])->name('session.logout');
