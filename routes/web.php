<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



Route::get('/playlist', [App\Http\Controllers\PlaylistsController::class, 'index']);
Route::get('/playlist/new', [App\Http\Controllers\PlaylistsController::class, 'new']);
Route::post('/playlist/add', [App\Http\Controllers\PlaylistsController::class, 'add']);
Route::get('/playlist/{id}/edit', [App\Http\Controllers\PlaylistsController::class, 'edit']);
Route::post('/playlist/update/{id}', [App\Http\Controllers\PlaylistsController::class, 'update']);
Route::delete('/playlist/delete/{id}', [App\Http\Controllers\PlaylistsController::class, 'delete']);
Route::get('playlist/json/{id}', [App\Http\Controllers\PlaylistsController::class, 'exportJson']);

Route::get('/conteudo', [App\Http\Controllers\ConteudosController::class, 'index']);
Route::get('/conteudo/new', [App\Http\Controllers\ConteudosController::class, 'new']);
Route::post('/conteudo/add', [App\Http\Controllers\ConteudosController::class, 'add']);
Route::get('/conteudo/{id}/edit', [App\Http\Controllers\ConteudosController::class, 'edit']);
Route::post('/conteudo/update/{id}', [App\Http\Controllers\ConteudosController::class, 'update']);
Route::delete('/conteudo/delete/{id}', [App\Http\Controllers\ConteudosController::class, 'delete']);
Route::get('conteudo/json/{id}', [App\Http\Controllers\ConteudosController::class, 'exportJson']);