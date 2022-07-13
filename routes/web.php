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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'hello']);

Route::get('/sum/{num1}/{num2}', [\App\Http\Controllers\HomeController::class, 'sum']);

Route::get('/sub/{num1}/{num2}', [\App\Http\Controllers\HomeController::class, 'sub']);

Route::get('/sumCalc', [\App\Http\Controllers\CalcController::class, 'showSum']);

Route::post('/calc/sum', [\App\Http\Controllers\CalcController::class, 'calcSum']);

Route::get('/pokemon/{nome}', [\App\Http\Controllers\HomeController::class, 'pokemon']);
