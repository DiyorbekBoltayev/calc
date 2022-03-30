<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $data=$request->result;
        $value=$request->val;

        if($value=="="){
            $string = $data;
            $math_string ="return ".$string.";";
            $data = eval($math_string);

        }else{
            $data.=$value;
        }

        if($value=="Del"){
            $data="";
        }

        return view('welcome',["data"=>$data]);
    }
}
