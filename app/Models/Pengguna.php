<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pengguna
 * 
 * @property int $id_pengguna
 * @property string $username
 * @property string $password
 * 
 * @property Collection|Pegawai[] $pegawais
 * @property Collection|Pembeli[] $pembelis
 * @property Collection|TenagaKerja[] $tenaga_kerjas
 *
 * @package App\Models
 */
class Pengguna extends Model
{
	protected $table = 'pengguna';
	protected $primaryKey = 'id_pengguna';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pengguna' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password'
	];

	public function pegawais()
	{
		return $this->hasMany(Pegawai::class, 'id_pengguna');
	}

	public function pembelis()
	{
		return $this->hasMany(Pembeli::class, 'id_pengguna');
	}

	public function tenaga_kerjas()
	{
		return $this->hasMany(TenagaKerja::class, 'id_pengguna');
	}
}
