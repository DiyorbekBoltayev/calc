<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $data=$request->result;
        $value=$request->val;
        $data.=$value;
        if($value=="Del"){
            $data="";
        }

        return view('welcome',["data"=>$data]);
    }
}
