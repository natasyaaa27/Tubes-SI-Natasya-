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
        Schema::create('stok_produksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produksi')->nullable();
            $table->foreign('id_produksi')->references('id')->on('produksis');
            $table->string('jumlah_stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_produksis');
    }
};
