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

// localization default
Route::get('/form', function () {
    return view('biodata');
});

Route::get('/{locale}/form', function($locale){
    App::setLocale($locale);
    return view('biodata');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/enkripsi', 'WafiqController@enkripsi');
Route::get('/data', 'WafiqController@data');
Route::get('/data/{data_rahasia}', 'WafiqController@data_proses');
Route::get('/hash', 'WafiqController@hash');
Route::get('/upload', 'UploadController@upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus_proses');
Route::get('/session/tampil', 'SessionController@session_tampil');
Route::get('/session/buat', 'SessionController@session_buat');
Route::get('/session/hapus', 'SessionController@session_hapus');
Route::get('/pesan', 'NotifController@index');
Route::get('/pesan/sukses', 'NotifController@sukses');
Route::get('/pesan/peringatan', 'NotifController@peringatan');
Route::get('/pesan/gagal', 'NotifController@gagal');
// Route::get('/malasngoding','MalasngodingController@index');
Route::get('/malasngoding/{nama}','MalasngodingController@index');
Route::get('/kirimemail','MalasngodingController@email');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');
// Route::get('/siswa', 'SiswaController@index');
Route::get('/pegawai/export_excel', 'PegawaiController@export_excel');
Route::get('/halo/{nama}', 'HaloController@halo');
Route::get('halo', 'HaloController@panggil');

Route::post('/pegawai/import_excel', 'PegawaiController@import_excel');
Route::post('/upload/proses', 'UploadController@upload_proses');
