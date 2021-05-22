<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function(){
    return "hello everybode";
});

Route::get('blog', function(){
    return view('blog');
});

// custom get route
Route::get('/wafiq/{nama}', 'WafiqController@index');
Route::get('kamaluddin', 'KamaluddinController@index');
Route::get('/formulir', 'WafiqController@formulir');
Route::get('/blog','BlogController@index');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pegawai/delete/{id}','PegawaiController@delete');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/input', 'ValidationController@input');
Route::get('/my_pegawai', 'My_PegawaiController@index');

// custom post route
Route::post('/formulir/proses', 'WafiqController@proses');
Route::post('/pegawai/store','PegawaiController@store');
Route::post('/pegawai/update','PegawaiController@update');
Route::post('/proses', 'ValidationController@proses');