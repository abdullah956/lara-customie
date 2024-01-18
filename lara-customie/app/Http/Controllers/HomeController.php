<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("Home.index");
    }
    public function catagoryHome(){
        return view("Catagories.catagoryHome");
    }
    public function cart(){
        return view("Home.cart");
    }
}
