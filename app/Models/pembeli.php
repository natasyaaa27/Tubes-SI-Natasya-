<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $table='pembelis';
    protected $fillable = [
        'id_pengguna',
        'nama_pembeli',
        'usia',
        'jenis_kelamin',
    ];
}
