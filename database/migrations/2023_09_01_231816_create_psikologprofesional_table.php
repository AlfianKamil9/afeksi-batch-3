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
        Schema::create('konselor_konseling_pivot', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('konseling_id');
            $table->unsignedBigInteger('konselor_id');
            
            $table->foreign('konseling_id')->references('id')->on('professional_conselings')->onDelete('restrict');
            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('restrict');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselor_konseling_pivot');
    }
};
