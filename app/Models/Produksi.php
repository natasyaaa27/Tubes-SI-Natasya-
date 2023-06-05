<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produksi
 *
 * @property int $id_produksi
 * @property int $id_tenagakerja
 * @property string $biaya_produksi
 * @property string $stok_produksi
 *
 * @property TenagaKerja $tenaga_kerja
 * @property Collection|BiayaProduksi[] $biaya_produksis
 * @property Collection|StokProduksi[] $stok_produksis
 *
 * @package App\Models
 */
class Produksi extends Model
{
	protected $table = 'produksi';
	protected $primaryKey = 'id_produksi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produksi' => 'int',
		'id_tenagakerja' => 'int'
	];

	protected $fillable = [
		'id_produksi',
        'id_tenagakerja',
		'biaya_produksi',
		'stok_produksi'
	];

	public function tenaga_kerja()
	{
		return $this->belongsTo(TenagaKerja::class, 'id_tenagakerja');
	}

	public function biaya_produksis()
	{
		return $this->hasMany(BiayaProduksi::class, 'id_produksi');
	}

	public function stok_produksis()
	{
		return $this->hasMany(StokProduksi::class, 'id_produksi');
	}
}
