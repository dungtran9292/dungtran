<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    public function xinchao(){
    	echo "hi , this is MyController on method xinchao of Dung";
    }

    public function sum($a){
    	echo "Tong ".$a ;
    	return redirect()->route('LAVAREL');
    }

    public function getPath(Request $req){
    	return $req->url();
    }

}
