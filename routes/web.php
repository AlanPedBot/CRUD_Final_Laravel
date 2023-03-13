<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::prefix('/biblioteca')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('site.home');

    Route::get('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create');
    Route::post('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create');


    Route::get('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read');
    Route::post('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read');

    Route::get('/{id}/editar', [\App\Http\Controllers\BookController::class, 'edit'])->name('site.edit');
    Route::put('/{id}/editar', [\App\Http\Controllers\BookController::class, 'update'])->name('site.update');

    Route::delete('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete');
    Route::get('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete');
});
