<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //register login
    public function register()
    {
        return view('register');
    }
    
    //pencarian
    public function pencarianPage()
    {
        return view('pencarian');
    }

    public function tahunPage()
    {
        return view('tahun');
    }

    public function bidangPage()
    {
        return view('bidang');
    }

    public function fakdepPage()
    {
        return view('fakdep');
    }
}
