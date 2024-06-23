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
        Schema::create('peers_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('konselor_id');
            $table->date('tanggal_order');
            $table->enum('status_order', ['SUCCESS', 'PENDING', 'FAIL']);
            $table->string('total_price');
            $table->string('platform');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paket_id')->references('id')->on('peers_pakets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('konselor_id')->references('id')->on('peers_konselors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peers_orders');
    }
};
