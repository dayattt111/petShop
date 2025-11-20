<?php

use App\Http\Controllers\menuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [menuController::class, 'index']);
Route::get('/register', [menuController::class, 'register']);
Route::post('/logout', [menuController::class, 'logout']);

//user
Route::post('/User', [menuController::class, 'userIndex']);
Route::get('/User', [menuController::class, 'userIndex']);
Route::get('/User/pesananSaya', [menuController::class, 'UserPesananSaya']);
Route::get('/User/dataPemeriksaan', [menuController::class, 'UserDataPemeriksaan']);

//kasir
Route::post('/Kasir', [menuController::class, 'kasirIndex']);
Route::get('/Kasir', [menuController::class, 'kasirIndex']);

// penjualanKasir
Route::get('/Kasir/KelolaTransaksiPenjualan/tambah', [menuController::class, 'TambahKelolaTransaksiPenjualan']);
Route::get('/Kasir/KelolaTransaksiPenjualan/edit', [menuController::class, 'EditKelolaTransaksiPenjualan']);
Route::post('/Kasir/KelolaTransaksiPenjualan/hapus', [menuController::class, 'HapusKelolaTransaksiPenjualan']);
Route::get('/Kasir/KelolaTransaksiPenjualan/hapus', [menuController::class, 'HapusKelolaTransaksiPenjualan']);
Route::get('/Kasir/KelolaTransaksiPenjualan', [menuController::class, 'KelolaTransaksiPenjualan']);
Route::post('/Kasir/KelolaTransaksiPenjualan', [menuController::class, 'KelolaTransaksiPenjualan']);

// pelayananKasir
Route::get('/Kasir/KelolaTransaksiPelayanan/tambah', [menuController::class, 'TambahKelolaTransaksiPelayanan']);
Route::get('/Kasir/KelolaTransaksiPelayanan/edit', [menuController::class, 'EditKelolaTransaksiPelayanan']);
Route::post('/Kasir/KelolaTransaksiPelayanan/hapus', [menuController::class, 'HapusKelolaTransaksiPelayanan']);
Route::get('/Kasir/KelolaTransaksiPelayanan/hapus', [menuController::class, 'HapusKelolaTransaksiPelayanan']);
Route::post('/Kasir/KelolaTransaksiPelayanan', [menuController::class, 'KelolaTransaksiPelayanan']);
Route::get('/Kasir/KelolaTransaksiPelayanan', [menuController::class, 'KelolaTransaksiPelayanan']);
Route::post('/Kasir/KelolaTransaksiPelayanan', [menuController::class, 'KelolaTransaksiPelayanan']);

//cetakStruk
Route::post('/Kasir/CetakStruk', [menuController::class, 'CetakStruk']);
Route::get('/Kasir/CetakStruk', [menuController::class, 'CetakStruk']);
Route::get('/Kasir/CetakStrukSelect', [menuController::class, 'CetakStrukSelect']);

// Dokter
Route::post('/Dokter', [menuController::class, 'DokterIndex']);
Route::get('/Dokter', [menuController::class, 'DokterIndex']);

//KelolaJadwalDokter
Route::get('/Dokter/KelolaJadwal', [menuController::class, 'KelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal', [menuController::class, 'KelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/tambah', [menuController::class, 'TambahKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/tambah', [menuController::class, 'TambahKelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/hapus', [menuController::class, 'HapusKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/hapus', [menuController::class, 'HapusKelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/edit', [menuController::class, 'EditKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/edit', [menuController::class, 'EditKelolaJadwalDokter']);

//InputHasilPemeriksaan
Route::get('/Dokter/InputHasilPemeriksaan', [menuController::class, 'InputHasilPemeriksaan']);