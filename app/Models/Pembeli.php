<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pembeli
 *
 * @property int $id_pembeli
 * @property int $id_pengguna
 * @property string $nama
 * @property string $usia
 * @property string $jenis_kelamin
 *
 * @property Pengguna $pengguna
 * @property Collection|Barang[] $barangs
 *
 * @package App\Models
 */
class Pembeli extends Model
{
	protected $table = 'pembeli';
	protected $primaryKey = 'id_pembeli';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pembeli' => 'int',
		'id_pengguna' => 'int'
	];

	protected $fillable = [
		'id_pembeli',
        'id_pengguna',
		'nama',
		'usia',
		'jenis_kelamin'
	];

	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class, 'id_pengguna');
	}

	public function barangs()
	{
		return $this->hasMany(Barang::class, 'id_pembeli');
	}
}
