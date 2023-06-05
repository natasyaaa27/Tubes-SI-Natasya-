<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gudang
 *
 * @property int $id_gudang
 * @property int $id_stokPr
 * @property string $hasil_produksi
 * @property string $jumlah_stok
 *
 * @property StokProduksi $stok_produksi
 * @property Collection|Barang[] $barangs
 *
 * @package App\Models
 */
class Gudang extends Model
{
	protected $table = 'gudang';
	protected $primaryKey = 'id_gudang';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_gudang' => 'int',
		'id_stokPr' => 'int'
	];

	protected $fillable = [
		'id_gudang',
        'id_stokPr',
		'hasil_produksi',
		'jumlah_stok'
	];

	public function stok_produksi()
	{
		return $this->belongsTo(StokProduksi::class, 'id_stokPr');
	}

	public function barangs()
	{
		return $this->hasMany(Barang::class, 'id_gudang');
	}
}
