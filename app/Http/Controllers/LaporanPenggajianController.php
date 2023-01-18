<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenggajianController extends Controller
{
    public function LaporanPenggajian()
    {
        return view('/laporanpenggajian');
    }
}
