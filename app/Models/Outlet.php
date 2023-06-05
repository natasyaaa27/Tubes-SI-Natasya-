<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Outlet
 *
 * @property int $id_outlet
 * @property int $id_stokBr
 * @property int $id_kategoriBr
 * @property string $nama_outlet
 * @property string $alamat_outlet
 *
 * @property StokBarang $stok_barang
 * @property KategoriBarang $kategori_barang
 *
 * @package App\Models
 */
class Outlet extends Model
{
	protected $table = 'outlet';
	protected $primaryKey = 'id_outlet';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_outlet' => 'int',
		'id_stokBr' => 'int',
		'id_kategoriBr' => 'int'
	];

	protected $fillable = [
		'id_outlet',
        'id_stokBr',
		'id_kategoriBr',
		'nama_outlet',
		'alamat_outlet'
	];

	public function stok_barang()
	{
		return $this->belongsTo(StokBarang::class, 'id_stokBr');
	}

	public function kategori_barang()
	{
		return $this->belongsTo(KategoriBarang::class, 'id_kategoriBr');
	}
}
