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

// CetakStruk
Route::post('/Kasir/CetakStruk', [menuController::class, 'CetakStruk']);
Route::get('/Kasir/CetakStruk', [menuController::class, 'CetakStruk']);
Route::get('/Kasir/CetakStrukSelect', [menuController::class, 'CetakStrukSelect']);

// Dokter *
Route::post('/Dokter', [menuController::class, 'DokterIndex']);
Route::get('/Dokter', [menuController::class, 'DokterIndex']);

// Dokter KelolaJadwalDokter
Route::get('/Dokter/KelolaJadwal', [menuController::class, 'KelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal', [menuController::class, 'KelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/tambah', [menuController::class, 'TambahKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/tambah', [menuController::class, 'TambahKelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/hapus', [menuController::class, 'HapusKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/hapus', [menuController::class, 'HapusKelolaJadwalDokter']);
Route::get('/Dokter/KelolaJadwal/edit', [menuController::class, 'EditKelolaJadwalDokter']);
Route::post('/Dokter/KelolaJadwal/edit', [menuController::class, 'EditKelolaJadwalDokter']);

// Dokter InputHasilPemeriksaan
Route::get('/Dokter/InputHasilPemeriksaan', [menuController::class, 'InputHasilPemeriksaan']);


// Admin *
Route::post('/Admin', [menuController::class, 'AdminIndex']);
Route::get('/Admin', [menuController::class, 'AdminIndex']);

// Admin KelolaDataProduk
Route::post('/Admin/KelolaDataProduk', [menuController::class, 'KelolaDataProduk']);
Route::get('/Admin/KelolaDataProduk', [menuController::class, 'KelolaDataProduk']);
Route::post('/Admin/KelolaDataProduk/tambah', [menuController::class, 'TambahKelolaDataProduk']);
Route::get('/Admin/KelolaDataProduk/tambah', [menuController::class, 'TambahKelolaDataProduk']);
Route::post('/Admin/KelolaDataProduk/hapus', [menuController::class, 'HapusKelolaDataProduk']);
Route::get('/Admin/KelolaDataProduk/hapus', [menuController::class, 'HapusKelolaDataProduk']);
Route::post('/Admin/KelolaDataProduk/edit', [menuController::class, 'EditKelolaDataProduk']);
Route::get('/Admin/KelolaDataProduk/edit', [menuController::class, 'EditKelolaDataProduk']);

// Admin KelolaLaporanPenjualan
Route::post('/Admin/KelolaLaporanPenjualan', [menuController::class, 'KelolaLaporanPenjualan']);
Route::get('/Admin/KelolaLaporanPenjualan', [menuController::class, 'KelolaLaporanPenjualan']);
Route::post('/Admin/KelolaLaporanPenjualan/tambah', [menuController::class, 'TambahKelolaLaporanPenjualan']);
Route::get('/Admin/KelolaLaporanPenjualan/tambah', [menuController::class, 'TambahKelolaLaporanPenjualan']);
Route::post('/Admin/KelolaLaporanPenjualan/hapus', [menuController::class, 'HapusKelolaLaporanPenjualan']);
Route::get('/Admin/KelolaLaporanPenjualan/hapus', [menuController::class, 'HapusKelolaLaporanPenjualan']);
Route::post('/Admin/KelolaLaporanPenjualan/edit', [menuController::class, 'EditKelolaLaporanPenjualan']);
Route::get('/Admin/KelolaLaporanPenjualan/edit', [menuController::class, 'EditKelolaLaporanPenjualan']);


// Admin KelolaLaporanLayanan
Route::post('/Admin/KelolaLaporanDataLayananPerawatan', [menuController::class, 'KelolaLaporanLayanan']);
Route::get('/Admin/KelolaLaporanDataLayananPerawatan', [menuController::class, 'KelolaLaporanLayanan']);
Route::post('/Admin/KelolaLaporanDataLayananPerawatan/tambah', [menuController::class, 'TambahKelolaLaporanLayanan']);
Route::get('/Admin/KelolaLaporanDataLayananPerawatan/tambah', [menuController::class, 'TambahKelolaLaporanLayanan']);
Route::post('/Admin/KelolaLaporanDataLayananPerawatan/hapus', [menuController::class, 'HapusKelolaLaporanLayanan']);
Route::get('/Admin/KelolaLaporanDataLayananPerawatan/hapus', [menuController::class, 'HapusKelolaLaporanLayanan']);
Route::post('/Admin/KelolaLaporanDataLayananPerawatan/edit', [menuController::class, 'EditKelolaLaporanLayanan']);
Route::get('/Admin/KelolaLaporanDataLayananPerawatan/edit', [menuController::class, 'EditKelolaLaporanLayanan']);


// Admin KelolaJadwalDokter
Route::get('/Admin/KelolaJadwalDokter', [menuController::class, 'KelolaJadwalDokterAdmin']);



// Admin KelolaUser
Route::get('/Admin/KelolaDataPengguna', [menuController::class, 'KelolaDataPengguna']);