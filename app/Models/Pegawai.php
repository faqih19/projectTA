<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public $table = "pegawai";

    protected $fillabel=[
        'Nama',
        'jenis_kelamin',
        'Alamat',
        'Jabatan',
        'Gaji'
    ];

    public function absen()
    {
        return $this->hasOne(Absen::class);
    }

    public static function getPegawai($id){
        $peg = pegawai::where('id', $id)->get();
        return $peg;
    }
}
