<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'kendaraan';

    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
        'stok',
        'terjual',
        'tipe_kendaraan',
        'mesin',
        'suspensi',
        'kapasitas_penumpang',
        'transmisi',
        'tipe'
    ];
}
