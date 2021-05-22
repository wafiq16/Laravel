<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WafiqController extends Controller
{
    //isi serah loe
    public function index($nama){
        // return "method index WafiqController";
        // $nama = "huda dan bambang";
        $bidang = ["Computer Vision", "Robotic", "Web-Dev"];
        return view('biodata',['nama' => $nama, 'bidang' => $bidang]);
    }

    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}