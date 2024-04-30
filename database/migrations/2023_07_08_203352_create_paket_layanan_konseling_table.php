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
        Schema::create('paket_layanan_konseling', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->unsignedBigInteger('layanan_konseling_id');
            $table->text('deskripsi_paket');
            $table->string('durasi');
            $table->string('jumlah_sesi');
            $table->text('deskripsi_singkat')->nullable();
            $table->text('deskripsi_durasi')->nullable();
            $table->string('harga');
            $table->timestamps();

            $table->foreign('layanan_konseling_id')->references('id')->on('layanan_konseling')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_layanan_konseling');
    }
};
