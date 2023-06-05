<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KategoriBarang
 *
 * @property int $id_kategoriBr
 * @property int $id_barang
 * @property string $kategori_barang
 *
 * @property Barang $barang
 * @property Collection|Outlet[] $outlets
 *
 * @package App\Models
 */
class KategoriBarang extends Model
{
	protected $table = 'kategori_barang';
	protected $primaryKey = 'id_kategoriBr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_kategoriBr' => 'int',
		'id_barang' => 'int'
	];

	protected $fillable = [
		'id_kategoriBr',
        'id_barang',
		'kategori_barang'
	];

	public function barang()
	{
		return $this->belongsTo(Barang::class, 'id_barang');
	}

	public function outlets()
	{
		return $this->hasMany(Outlet::class, 'id_kategoriBr');
	}
}
