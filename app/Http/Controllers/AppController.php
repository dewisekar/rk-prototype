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
    public function actionUserLogin()
    {
        return redirect('/home');
    }
    public function adminLogin()
    {
        return view('admin-login');
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

    public function hasil()
    {
        return view('hasil');
    }

    //user
    public function adminHome()
    {
        return view('admin.admin-home');
    }
    public function adminVerifikasi()
    {
        return view('admin.admin-verifikasi');
    }
    public function detailVerifikasi()
    {
        return view('admin.detail-verifikasi');
    }
    public function actionVerif()
    {
        return redirect('/verifikasi')->with('success', 'Tugas akhir berhasil di verifikasi');
    }
}
