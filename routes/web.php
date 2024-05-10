<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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

Route::get('/', [SeriesController::class, 'index']);

Route::get('/series', [SeriesController::class, 'index']);

Route::get('/criar', [SeriesController::class, 'create']);

Route::post('/salvar', [SeriesController::class, 'store']);

Route::post('/series', [SeriesController::class, 'store']);