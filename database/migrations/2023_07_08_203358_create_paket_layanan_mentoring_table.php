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
        Schema::create('paket_layanan_mentoring', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_mentoring_id');
            $table->string('nama_paket');
            $table->string('harga');
            $table->text('deskripsi_paket');
            $table->text('deskripsi_durasi');
            $table->string('durasi');
            $table->string('jumlah_sesi');
            $table->text('deskripsi_singkat')->nullable();
            $table->timestamps();

            $table->foreign('layanan_mentoring_id')->references('id')->on('layanan_mentoring')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_layanan_mentoring');
    }
};