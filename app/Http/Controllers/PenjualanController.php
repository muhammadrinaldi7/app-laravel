<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //index kasir
    public function kasir()
    {
        return view('penjualan.indexkasir');
    }
}
