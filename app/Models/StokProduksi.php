<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StokProduksi
 *
 * @property int $id_stokPr
 * @property int $id_produksi
 * @property string $stok_produksi
 *
 * @property Produksi $produksi
 * @property Collection|Gudang[] $gudangs
 *
 * @package App\Models
 */
class StokProduksi extends Model
{
	protected $table = 'stok_produksi';
	protected $primaryKey = 'id_stokPr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_stokPr' => 'int',
		'id_produksi' => 'int'
	];

	protected $fillable = [
		'id_stokPr',
        'id_produksi',
		'stok_produksi'
	];

	public function produksi()
	{
		return $this->belongsTo(Produksi::class, 'id_produksi');
	}

	public function gudangs()
	{
		return $this->hasMany(Gudang::class, 'id_stokPr');
	}
}
