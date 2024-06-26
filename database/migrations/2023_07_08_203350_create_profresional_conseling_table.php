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
        Schema::create('professional_conselings', function (Blueprint $table) {
            $table->id('id');
            $table->enum('jenis_layanan', ['PROFESSIONAL KONSELING','PEERS KONSELING']);
            $table->enum('namaPengalaman', ['Relationship Konseling', 'Quality Gender', 'Peers Konseling']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profresional_conselings');
    }
};
