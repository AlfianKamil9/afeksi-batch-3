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
        Schema::create('peers_pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('headline_paket');
            $table->string('harga_paket');
            $table->string('durasi_paket');
            $table->text('deskripsi_paket');
            $table->enum('status_paket', ['free', 'paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peers_pakets');
    }
};
