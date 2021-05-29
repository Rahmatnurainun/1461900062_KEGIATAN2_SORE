<?php

use App\Http\Controllers\AbsenController;
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

Route::get('/',  [AbsenController::class, 'index']);

Route::get('/absen', [AbsenController::class, 'index']);
Route::get('/absen/cari', [AbsenController::class, 'search']);
