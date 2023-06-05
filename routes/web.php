<?php

use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BiayaProduksiController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\StokProduksiController;
use App\Http\Controllers\TenagaKerjaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('pegawai', PegawaiController::class);
Route::get('print-pegawai', [PegawaiController::class, 'print']);

Route::resource('pembeli', PembeliController::class);
Route::get('print-pembeli', [PembeliController::class, 'print']);

Route::resource('tenaga_kerja', TenagaKerjaController::class);
Route::get('print-tenagakerja', [TenagaKerjaController::class, 'print']);

Route::resource('produksi', ProduksiController::class);
Route::get('print-produksi', [ProduksiController::class, 'print']);

Route::resource('stok_produksi', StokProduksiController::class);
Route::get('print-stokproduksi', [StokProduksiController::class, 'print']);

Route::resource('biaya_produksi', BiayaProduksiController::class);
Route::get('print-biayaproduksi', [BiayaProduksiController::class, 'print']);

Route::resource('bahan_baku', BahanBakuController::class);
Route::get('print-bahanbaku', [BahanBakuController::class, 'print']);

Route::resource('gudang', GudangController::class);
Route::get('print-gudang', [GudangController::class, 'print']);

Route::resource('barang', BarangController::class);
Route::get('print-barang', [BarangController::class, 'print']);

Route::resource('stok_barang', StokBarangController::class);
Route::get('print-stokbarang', [StokBarangController::class, 'print']);

Route::resource('kategori_barang', KategoriBarangController::class);
Route::get('print-kategoribarang', [KategoriBarangController::class, 'print']);

Route::resource('outlet', OutletController::class);
Route::get('print-outlet', [OutletController::class, 'print']);

Route::resource('pengguna', PenggunaController::class);
Route::get('print-pengguna', [PenggunaController::class, 'print']);
