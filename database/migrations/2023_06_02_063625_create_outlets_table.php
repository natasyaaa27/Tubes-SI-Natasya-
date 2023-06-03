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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_stokBr')->nullable();
            $table->foreign('id_stokBr')->references('id')->on('stok_barangs');
            $table->string('nama_outlet');
            $table->string('alamat_outlet');
            $table->unsignedBigInteger('id_kategoriBr')->nullable();
            $table->foreign('id_kategoriBr')->references('id')->on('kategori_barangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlets');
    }
};
