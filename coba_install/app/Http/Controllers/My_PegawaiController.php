<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class My_PegawaiController extends Controller
{
    //
    public function index(){
        $pegawai = Pegawai::paginate(10);
        return view('pegawai', ['pegawai' => $pegawai]);
    }
}
