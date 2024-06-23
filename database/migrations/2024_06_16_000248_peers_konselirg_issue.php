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
        Schema::create('peers_konseling_issue', function (Blueprint $table) {
            $table->unsignedBigInteger('konselor_id');
            $table->unsignedBigInteger('issue_id');

            $table->foreign('konselor_id')->references('id')->on('peers_konselors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('issue_id')->references('id')->on('peers_issues')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
