<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User\User;
use App\Model\UserMakanan;

class PelangganController extends Controller
{
    public function addMakanan(){

    }

    public function getIdMakanan($id){
        $makanan = UserMakanan::find($id);
        echo json_encode($makanan);
    }
}
