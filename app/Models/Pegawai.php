<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public $table = "pegawai";
    protected $primaryKey = 'id_pegawai';
    public $incrementing = false;
    protected $keyType = 'char';
    protected $fillabel = [
        'id_pegawai',
        'nama',
        'no_hp',
        'jenis_kelamin',
        'alamat',
        'jabatan',
        'gaji'
    ];

    public function absen()
    {
        return $this->hasOne(Absen::class);
    }

    public static function getPegawai($id_pegawai)
    {
        $pegawai = Pegawai::where('id_pegawai', $id_pegawai)->get();
        return $pegawai;
    }
}
