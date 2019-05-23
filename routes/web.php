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

Route::get('pencarian', 'AppController@pencarianPage');
Route::get('lihat-tahun', 'AppController@tahunPage');
Route::get('lihat-bidang', 'AppController@bidangPage');
Route::get('lihat-fakultas-departemen', 'AppController@fakdepPage');
