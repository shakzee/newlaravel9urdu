<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
        echo 'controller is working from home';
    }
    public function about($id){
        $data['data'] =  $id;
        return view('welcome',$data);
    }

}
