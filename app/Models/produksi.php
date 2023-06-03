<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksi extends Model
{
    use HasFactory;
    protected $table='produksis';
    protected $fillable= [
        'id_produksi',
        'id_tk',
        'biaya_produksi',
        'stok_produksi',
    ];
}
