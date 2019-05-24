<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//register login
Route::get('register', 'AppController@register');
Route::get('registersuccess', 'AppController@registerSuccess');
Route::get('login', 'AppController@login');
Route::get('actionuserlogin', 'AppController@actionUserLogin');

//cari
Route::get('pencarian', 'AppController@pencarianPage');
Route::get('lihat-tahun', 'AppController@tahunPage');
Route::get('lihat-bidang', 'AppController@bidangPage');
Route::get('lihat-fakultas-departemen', 'AppController@fakdepPage');
Route::get('detail-ta', 'AppController@detailTA');

//user
Route::get('home', 'AppController@userHome');
Route::get('upload', 'AppController@userUpload');
Route::get('hasil', 'AppController@hasil');
