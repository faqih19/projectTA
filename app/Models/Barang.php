<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = "barang";

    protected $fillabel=[
        'merk',
        'type'
    ];
    public static function getBarang($id){
        $bar = barang::where('id', $id)->get();
        return $bar;
    }
}
