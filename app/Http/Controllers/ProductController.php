<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }
    public function food(){
        return view('food');
    }
    public function beauty(){
        return view('beauty');
    }
    public function home(){
        return view('home');
    }
    public function baby(){
        return view('baby');
    }
}
