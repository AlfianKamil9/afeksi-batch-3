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
        Schema::create('layanan_konseling', function (Blueprint $table) {
            $table->id('id');
            $table->enum('tipe_layanan', ['PROFESSIONAL KONSELING', 'PEERS KONSELING']);
            $table->string('nama_layanan')->nullable();
            $table->string('image')->nullable();
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_konseling');
    }
};
