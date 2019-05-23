<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
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
