<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Absen extends Model
{
    public $table = "absensi";

    protected $fillabel = [
        'id_pegawai',
        'status'
    ];

    public function getUpdatedAt()
    {
        return Carbon::parse($this->attributes['updated_at'])
            ->translatedFormat('l, d F Y');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public static function getAbsen($id)
    {
        $absen = absen::where('id', $id)->get();
        return $absen;
    }
}
