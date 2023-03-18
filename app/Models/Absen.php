<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    public $table = "absensi";

    protected $fillabel=[
        'id_pegawai',
        'nama',
        'jenis_kelamin',
        'jabatan',
        'tanggal',
        'jam',
        'Kehadiran'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'id','id');
    }

    public static function getAbsen($id){
        $abs = absen::where('id', $id)->get();
        return $abs;
    }

}
