<?php

use App\Http\Controllers\ArmaController;
use App\Http\Controllers\BintangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arma', [ArmaController::class, 'index']);

Route::get('/bintang', [BintangController::class, 'index']);
