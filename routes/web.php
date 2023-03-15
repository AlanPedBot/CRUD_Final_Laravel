<?php

use App\Mail\Mail;
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
Route::get('/', [App\Http\Controllers\HomePageController::class, 'homePage'])->name('homePage');

Auth::routes(['verify' => true]);
Route::prefix('/biblioteca')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('site.home')->middleware('verified');

    Route::get('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create')->middleware('verified');
    Route::post('/adicionar', [\App\Http\Controllers\BookController::class, 'create'])->name('site.create')->middleware('verified');


    Route::get('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read')->middleware('verified');
    Route::post('/buscar', [\App\Http\Controllers\BookController::class, 'read'])->name('site.read')->middleware('verified');

    Route::get('/{id}/editar', [\App\Http\Controllers\BookController::class, 'edit'])->name('site.edit')->middleware('verified');
    Route::put('/{id}/editar', [\App\Http\Controllers\BookController::class, 'update'])->name('site.update')->middleware('verified');

    Route::delete('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete')->middleware('verified');
    Route::get('/deletar/{id}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('site.delete')->middleware('verified');
});
