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
        Schema::create('biaya_produksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produksi')->nullable();
            $table->foreign('id_produksi')->references('id')->on('produksis');
            $table->string('biaya_bahanBaku');
            $table->string('biaya_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_produksis');
    }
};
