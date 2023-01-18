<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPController extends Controller
{
    public function LaporanPenjualan()
    {
        return view('/laporanP');
    }
}
