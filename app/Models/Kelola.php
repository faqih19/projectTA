<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelola extends Model
{
    use HasFactory;
    public $table = "kelola_barang";

    protected $fillabel=[
        'kode_kendaraan',
        'nama_kendaraan',
        'tahun_pembuatan',
        'status_jual',
        'harga',
        'status_motor',
        'isi_slinder',
        'no_stnk',
        'no_rangka',
        'no_mesin',
        'tanggal',
        'warna',
        'bahan_bakar',
        'warna_tnkb',
        'foto',
        'deskripsi'
    ];
    public static function getKelola($id){
        $kel = kelola::where('id', $id)->get();
        return $kel;
    }
}
