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
    }    
    public function KelolaTransaksiPenjualan(){
        return view('kasir.KelolaTransaksiPenjualan');
    }
    public function KelolaTransaksiPelayanan(){
        return view('kasir.KelolaTransaksiPelayanan');
    }
    public function CetakStruk(){
        return view('kasir.CetakStruk');
    }
}
