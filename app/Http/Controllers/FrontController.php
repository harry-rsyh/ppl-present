<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function trending(){
        return view('front.trending.index');
    }

    public function makanan(){
        return view('front.makanan.index');
    }

    public function minuman(){
        return view('front.minuman.index');
    }

    public function dessert(){
        return view('front.dessert.index');
    }

    public function mypesanan(){
        return view('front.my-pesanan.index');
    }
}