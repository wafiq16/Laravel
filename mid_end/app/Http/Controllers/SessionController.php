<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function session_tampil(Request $request){
        if($request->session()->has('nama')){
			echo $request->session()->get('nama');
		}else{
			echo 'Tidak ada data dalam session.';
		}
    }

    public function session_buat(Request $request){
        $request->session()->put('nama','Diki Alfarabi Hadi');
		echo "Data telah ditambahkan ke session.";
    }

    public function session_hapus(Request $request){
		$request->session()->forget('nama');
		echo "Data telah dihapus dari session.";
    }
}
