<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
// login & register *
    public function index(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function logout(){
        return view('/');
    }

//user *
    public function userIndex(){
        return view('user.index');
    }
    public function UserPesananSaya(){
        return view('user.pesananSaya');
    }
    public function UserDataPemeriksaan(){
        return view('user.dataPemeriksaan');
    }
 
//kasir *
    public function kasirIndex(){
        return view('kasir.index');
//penjualanKair
    }    
    public function KelolaTransaksiPenjualan(){
        return view('kasir.KelolaTransaksiPenjualan');
    }
// crud penjualanKasir
    public function TambahKelolaTransaksiPenjualan(){
        return view('kasir.crud.tambah');
    }
    public function EditKelolaTransaksiPenjualan(){
        return view('kasir.crud.edit');
    }
    public function HapusKelolaTransaksiPenjualan(){
        return view('kasir.crud.hapus');
    }

// pelayananKasir
    public function KelolaTransaksiPelayanan(){
        return view('kasir.KelolaTransaksiPelayanan');
    }
//crud pelayananKasir
    public function TambahKelolaTransaksiPelayanan(){
        return view('kasir.crudPelayanan.tambah');
    }
    public function EditKelolaTransaksiPelayanan(){
        return view('kasir.crudPelayanan.edit');
    }
    public function HapusKelolaTransaksiPelayanan(){
        return view('kasir.crudPelayanan.hapus');
    }

// CetakStruk 
    public function CetakStruk(){
        return view('kasir.Cetak');
    }
    public function CetakStrukSelect(){
        return view('kasir.CetakStruk');
    }

// Dokter *
    public function DokterIndex(){
        return view('dokter.index'); 
    }

//KelolaJadwalDokter
    public function KelolaJadwalDokter(){
        return view('dokter.KelolaJadwal.index'); 
    }
//crud KelolaJadwalDokter
    public function TambahKelolaJadwalDokter(){
        return view('dokter.KelolaJadwal.tambah'); 
    }
    public function HapusKelolaJadwalDokter(){
        return view('dokter.KelolaJadwal.hapus'); 
    }
    public function EditKelolaJadwalDokter(){
        return view('dokter.KelolaJadwal.edit'); 
    }

//InputHasilPemeriksaan
    public function InputHasilPemeriksaan(){
        return view('dokter.InputHasilPemeriksaan.index');
    }


// Admin *
    public function AdminIndex(){
        return view('admin.index'); 
    }

// Admin KelolaDataProduk
    public function KelolaDataProduk(){
        return view('admin.KelolaDataProduk.index'); 
    }
//crud KelolaDataProduk
    public function TambahKelolaDataProduk(){
        return view('admin.KelolaDataProduk.tambah'); 
    }
    public function HapusKelolaDataProduk(){
        return view('admin.KelolaDataProduk.hapus'); 
    }
    public function EditKelolaDataProduk(){
        return view('admin.KelolaDataProduk.edit'); 
    }

// Admin KelolaLaporanPenjualan
    public function KelolaLaporanPenjualan(){
        return view('admin.KelolaLaporanPenjualan.index'); 
    }
//crud KelolaLaporanPenjualan
    public function TambahKelolaLaporanPenjualan(){
        return view('admin.KelolaLaporanPenjualan.tambah'); 
    }
    public function HapusKelolaLaporanPenjualan(){
        return view('admin.KelolaLaporanPenjualan.hapus'); 
    }
    public function EditKelolaLaporanPenjualan(){
        return view('admin.KelolaLaporanPenjualan.edit'); 
    }


// Admin KelolaLaporanLayanan
    public function KelolaLaporanLayanan(){
        return view('admin.KelolaLaporanLayanan.index'); 
    }

//crud KelolaLaporanLayanan
    public function TambahKelolaLaporanLayanan(){
        return view('admin.KelolaLaporanLayanan.tambah'); 
    }
    public function HapusKelolaLaporanLayanan(){
        return view('admin.KelolaLaporanLayanan.hapus'); 
    }
    public function EditKelolaLaporanLayanan(){
        return view('admin.KelolaLaporanLayanan.edit'); 
    }



// Admin KelolaJadwalDokter
    public function KelolaJadwalDokterAdmin(){
        return view('admin.KelolaJadwalDokter.index');
    }
// crud KelolaJadwalDokter
    public function AdminTambahKelolaJadwalDokter(){
        return view('admin.KelolaJadwalDokter.tambah');
    }
    public function AdminHapusKelolaJadwalDokter(){
        return view('admin.KelolaJadwalDokter.hapus');
    }
    public function AdminEditKelolaJadwalDokter(){
        return view('admin.KelolaJadwalDokter.edit');
    }


// Admin KelolaDataPengguna
    public function KelolaDataPengguna(){
        return view('admin.KelolaDataPengguna.index');
    }
    
// crud KelolaDataPengguna
    public function TambahKelolaDataPengguna(){
        return view('admin.KelolaDataPengguna.tambah');
    }
    public function HapusKelolaDataPengguna(){
        return view('admin.KelolaDataPengguna.hapus');
    }
    public function EditKelolaDataPengguna(){
        return view('admin.KelolaDataPengguna.edit');
    }  
}