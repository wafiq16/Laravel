<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hadiah;
use App\Anggota;

class HadiahController extends Controller
{
    //
    public function index(){
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}
