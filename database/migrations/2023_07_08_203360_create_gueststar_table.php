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
        Schema::create('gueststar', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('nama_psikolog');
            $table->double('rating')->nullable();
            $table->string('profil');
            $table->text('deskripsi')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('pendidikan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikologs');
    }
};
