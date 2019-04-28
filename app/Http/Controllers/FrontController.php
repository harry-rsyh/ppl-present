<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserMakanan;
use App\Model\UserMinuman;
use App\Model\UserDessert;

class FrontController extends Controller
{
    public function trending(){
        return view('front.trending.index');
    }

    public function makanan(){
        $data['Makanan'] = UserMakanan::get();
        return view('front.makanan.index',$data);
    }

    public function minuman(){
        $data['Minuman'] = UserMinuman::get();
        return view('front.minuman.index',$data);
    }

    public function dessert(){
        $data['Dessert'] = UserDessert::get();
        return view('front.dessert.index',$data);
    }

    public function mypesanan(){
        return view('front.my-pesanan.index');
    }
}