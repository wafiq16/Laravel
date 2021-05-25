<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MalasngodingEmail;
use Illuminate\Support\Facades\Mail;

class MalasngodingController extends Controller
{
    //
    public function index($nama){
		if($nama == "malasngoding"){
			return abort(403,'Anda tidak punya akses karena anda Malas Ngoding');
		}elseif($nama == "diki"){
			return "Halo, ".$nama;
		}else{
			return abort(404);
		}
	}

	public function email(){
		Mail::to("wafiqkamal16@gmail.com")->send(new MalasngodingEmail());
		return "Email telah dikirim";
	}
}
