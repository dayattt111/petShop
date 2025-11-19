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

    public function userIndex(){
        return view('user.index');
    }


    
}
