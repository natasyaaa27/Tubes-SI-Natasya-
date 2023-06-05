<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TenagaKerja
 *
 * @property int $id_tenagakerja
 * @property int $id_pengguna
 * @property string $nama
 * @property string $usia
 * @property string $jenis_kelamin
 *
 * @property Pengguna $pengguna
 * @property Collection|BahanBaku[] $bahan_bakus
 * @property Collection|Produksi[] $produksis
 *
 * @package App\Models
 */
class TenagaKerja extends Model
{
	protected $table = 'tenaga_kerja';
	protected $primaryKey = 'id_tenagakerja';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tenagakerja' => 'int',
		'id_pengguna' => 'int'
	];

	protected $fillable = [
		'id_tenagakerja',
        'id_pengguna',
		'nama',
		'usia',
		'jenis_kelamin'
	];

	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class, 'id_pengguna');
	}

	public function bahan_bakus()
	{
		return $this->hasMany(BahanBaku::class, 'id_tenagakerja');
	}

	public function produksis()
	{
		return $this->hasMany(Produksi::class, 'id_tenagakerja');
	}
}
