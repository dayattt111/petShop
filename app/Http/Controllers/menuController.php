<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
// login & register
    public function index(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function logout(){
        return view('/');
    }

//user
    public function userIndex(){
        return view('user.index');
    }
    public function UserPesananSaya(){
        return view('user.pesananSaya');
    }
    public function UserDataPemeriksaan(){
        return view('user.dataPemeriksaan');
    }
 
//kasir
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
}
