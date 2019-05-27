<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function pelayan(){
        return view('pelayan.proses.index');
    }
}
