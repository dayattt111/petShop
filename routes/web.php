<?php

use App\Http\Controllers\menuController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [menuController::class, 'index']);
Route::get('/register', [menuController::class, 'register']);
Route::post('/logout', [menuController::class, 'logout']);

//user
Route::post('/User', [menuController::class, 'userIndex']);
Route::get('/User', [menuController::class, 'userIndex']);
Route::get('/User/pesananSaya', [menuController::class, 'UserPesananSaya']);
Route::get('/User/dataPemeriksaan', [menuController::class, 'UserDataPemeriksaan']);


Route::post('/Kasir', [menuController::class, 'kasirIndex']);
Route::get('/Kasir/KelolaTransaksiPenjualan', [menuController::class, 'KelolaTransaksiPenjualan']);
Route::get('/Kasir/KelolaTransaksiPelayanan', [menuController::class, 'KelolaTransaksiPelayanan']);
Route::get('/Kasir/CetakStruk', [menuController::class, 'CetakStruk']);
