<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Menu;

class FrontController extends Controller
{
    public function trending(){
        return view('front.trending.index');
    }

    public function makanan(){
        $data['Makanan'] = Menu::where('labelmenu_id','=',1)->get();
        return view('front.makanan.index',$data);
    }

    public function minuman(){
        $data['Makanan'] = Menu::where('labelmenu_id','=',2)->get();
        return view('front.minuman.index',$data);
    }

    public function dessert(){
        $data['Makanan'] = Menu::where('labelmenu_id','=',3)->get();
        return view('front.dessert.index',$data);
    }

    public function mypesanan(){
        return view('front.my-pesanan.index');
    }
}