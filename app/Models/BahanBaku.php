<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BahanBaku
 *
 * @property int $id_bahanBk
 * @property int $id_tenagakerja
 * @property string $nama_bahanbaku
 * @property string $harga_bahanbaku
 *
 * @property TenagaKerja $tenaga_kerja
 *
 * @package App\Models
 */
class BahanBaku extends Model
{
	protected $table = 'bahan_baku';
	protected $primaryKey = 'id_bahanBk';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_bahanBk' => 'int',
		'id_tenagakerja' => 'int'
	];

	protected $fillable = [
		'id_bahanBk',
        'id_tenagakerja',
		'nama_bahanbaku',
		'harga_bahanbaku'
	];

	public function tenaga_kerja()
	{
		return $this->belongsTo(TenagaKerja::class, 'id_tenagakerja');
	}
}
