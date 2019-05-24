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
    public function registerSuccess()
    {
        return redirect('/login')->with('success', 'Berhasil register. Silahkan login!');
    }
    public function login()
    {
        return view('login');
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

    public function detailTA()
    {
        return view('detailta');
    }

    //user
    public function userHome()
    {
        return view('user.user-home');
    }
    
    public function userUpload()
    {
        return view('user.user-upload');
    }
}
