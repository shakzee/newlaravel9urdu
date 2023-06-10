<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        //echo 'welcoem in user controller';
        return view('welcome',['data'=>2]);
    }
}
