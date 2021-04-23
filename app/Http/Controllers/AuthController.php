<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function registerasubmit(Request $request){
        return " Form submitted successfully!";
    }
}
