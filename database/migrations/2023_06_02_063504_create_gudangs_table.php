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
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_stokPr')->nullable();
            $table->foreign('id_stokPr')->references('id')->on('stok_produksis');
            $table->string('hasil_produksi');
            $table->string('jumlah_stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
