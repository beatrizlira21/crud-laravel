<?php

use App\Http\Controllers\ChirpController;
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

/*Route::get('/cadastrar-pessoa', [ChirpController::class, 'index']);
Route::post('/cadastrar-pessoa', [ChirpController::class, 'create']);
Route::post('/cadastrar-pessoa', [ChirpController::class, 'store']);*/

Route::resource('pessoa', ChirpController::class);








