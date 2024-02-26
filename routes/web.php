<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;

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
// Halaman Authenticate
Route::get('/',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authentic']);
Route::get('/logout',[LoginController::class, 'logout']);
Route::get('/signup',[SignupController::class, 'index'])->middleware('guest');

// Dashboard
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

//penjualan
Route::get('/penjualan/kasir',[PenjualanController::class, 'kasir'])->middleware('auth');

//stok
Route::get('/stok',[StokController::class, 'index'])->middleware('auth');
Route::get('/shipment',[ShipmentController::class, 'index'])->middleware('auth');
