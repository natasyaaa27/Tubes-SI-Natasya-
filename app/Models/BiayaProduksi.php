<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BiayaProduksi
 *
 * @property int $id_biayaPr
 * @property int $id_produksi
 * @property string $biaya_bahanbaku
 * @property string $biaya_total
 *
 * @property Produksi $produksi
 *
 * @package App\Models
 */
class BiayaProduksi extends Model
{
	protected $table = 'biaya_produksi';
	protected $primaryKey = 'id_biayaPr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_biayaPr' => 'int',
		'id_produksi' => 'int'
	];

	protected $fillable = [
		'id_biayaPr',
        'id_produksi',
		'biaya_bahanbaku',
		'biaya_total'
	];

	public function produksi()
	{
		return $this->belongsTo(Produksi::class, 'id_produksi');
	}
}
