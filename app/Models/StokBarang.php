<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StokBarang
 *
 * @property int $id_stokBr
 * @property int $id_barang
 * @property string $stok_produksi
 *
 * @property Barang $barang
 * @property Collection|Outlet[] $outlets
 *
 * @package App\Models
 */
class StokBarang extends Model
{
	protected $table = 'stok_barang';
	protected $primaryKey = 'id_stokBr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_stokBr' => 'int',
		'id_barang' => 'int'
	];

	protected $fillable = [
		'id_stokBr',
        'id_barang',
		'stok_produksi'
	];

	public function barang()
	{
		return $this->belongsTo(Barang::class, 'id_barang');
	}

	public function outlets()
	{
		return $this->hasMany(Outlet::class, 'id_stokBr');
	}
}
