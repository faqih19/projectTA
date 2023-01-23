<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    protected $table = 'penggajian';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'char';
    protected $fillable = [
        'id_penggajian',
        'nama',
        'jenis_kelamin',
        'no_hp',
        'jabatan',
        'alamat',
        'email'

    ];
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public static function getPenggajian($id)
    {
        $penggajian = Penggajian::where('id', $id)->get();
        return $penggajian;
    }
}
