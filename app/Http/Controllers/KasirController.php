<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function pembayaran(){
        return view('kasir.pembayaran.index');
    }

    public function transaksi(){
        return view('kasir.transaksi.index');
    }

    public function allTransaksi(){
        return view('kasir.transaksi-all.index');
    }
}
