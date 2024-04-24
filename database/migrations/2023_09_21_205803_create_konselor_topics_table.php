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
        Schema::create('konselor_topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konselor_id');
            $table->enum('jenis_topic', ['Relationship','Pendidikan','Kesetaraan','Kesehatan','Family Issue']);
            $table->timestamps();
            
            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselor_topics');
    }
};
