<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home() {
        return view('beranda');
    }

    public function caraSewa() {
        return view('caraSewa');
    }

    public function katalogProduk() {
        return view('katalogProduk');
    }

    public function hubungiKami() {
        return view('hubungiKami');
    }

    public function login() {
        return view('auth/login');
    }


}
