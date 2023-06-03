<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai')->nullable();
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->string('nama_barang');
            $table->string('stok_barang');
            $table->string('kategori_barang');
            $table->unsignedBigInteger('id_pembeli')->nullable();
            $table->foreign('id_pembeli')->references('id')->on('pembelis');
            $table->unsignedBigInteger('id_gudang')->nullable();
            $table->foreign('id_gudang')->references('id')->on('gudangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
