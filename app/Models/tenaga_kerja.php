<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenaga_kerja extends Model
{
    use HasFactory;
    protected $table='tenaga_kerjas';
    protected $fillable= [
        'id_pengguna',
        'nama_tenagakerja',
        'usia',
        'jenis_kelamin',
    ];
}
