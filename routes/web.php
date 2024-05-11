<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmigosController;

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

// rotas que funcionam

Route::get('/', [AmigosController::class, 'index']);

Route::get('/amigos', [AmigosController::class, 'index']);

Route::post('/amigos', [AmigosController::class, 'store']);

Route::get('/criar', [AmigosController::class, 'create']);

Route::delete('/amigos/{id}', [AmigosController::class, 'destroy']);

Route::get('/amigos/{id}/edit', [AmigosController::class, 'edit']);

Route::put('/amigos/{id}', [AmigosController::class, 'update']);

Route::get('/amigos/{id}/edit', [AmigosController::class, 'edit'])->name('amigos.edit');
Route::put('/amigos/{id}', [AmigosController::class, 'update'])->name('amigos.update');

// Route::get('/amigos/{id}/edit', 'AmigosController)->name('amigos.edit');