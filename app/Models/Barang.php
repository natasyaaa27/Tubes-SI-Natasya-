<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Barang
 *
 * @property int $id_barang
 * @property int $id_pembeli
 * @property int $id_pegawai
 * @property int $id_gudang
 * @property string $nama_barang
 * @property string $stok_barang
 * @property string $kategori_barang
 *
 * @property Pembeli $pembeli
 * @property Pegawai $pegawai
 * @property Gudang $gudang
 * @property Collection|KategoriBarang[] $kategori_barangs
 * @property Collection|StokBarang[] $stok_barangs
 *
 * @package App\Models
 */
class Barang extends Model
{
	protected $table = 'barang';
	protected $primaryKey = 'id_barang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_barang' => 'int',
		'id_pembeli' => 'int',
		'id_pegawai' => 'int',
		'id_gudang' => 'int'
	];

	protected $fillable = [
		'id_barang',
        'id_pembeli',
		'id_pegawai',
		'id_gudang',
		'nama_barang',
		'stok_barang',
		'kategori_barang'
	];

	public function pembeli()
	{
		return $this->belongsTo(Pembeli::class, 'id_pembeli');
	}

	public function pegawai()
	{
		return $this->belongsTo(Pegawai::class, 'id_pegawai');
	}

	public function gudang()
	{
		return $this->belongsTo(Gudang::class, 'id_gudang');
	}

	public function kategori_barangs()
	{
		return $this->hasMany(KategoriBarang::class, 'id_barang');
	}

	public function stok_barangs()
	{
		return $this->hasMany(StokBarang::class, 'id_barang');
	}
}
