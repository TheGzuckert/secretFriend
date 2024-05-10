<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
// use App\Http\Controllers\Alunos;
// use App\Http\Controllers\Animes;

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

Route::get('/series', [SeriesController::class, 'index']);

Route::get('/criar', [SeriesController::class, 'create']);

Route::post('/salvar', [SeriesController::class, 'store']);

Route::post('/series', [SeriesController::class, 'store']);
