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
        Schema::create('pembayaran_layanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ref_transaction_layanan')->nullable();
            $table->unsignedBigInteger('paket_layanan_konseling_id')->nullable();
            $table->unsignedBigInteger('paket_layanan_mentoring_id')->nullable();
            $table->unsignedBigInteger('konseling_id')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('status', ['UNPAID', 'UNPAID(BUTUH BAYAR)', 'PAID', 'PENDING', 'EXPIRED']);
            $table->unsignedBigInteger('psikolog_id')->nullable();
            $table->unsignedBigInteger('konselor_id')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('total_payment')->nullable();
            $table->string('fee_transaksi')->nullable();
            $table->timestamps();

            $table->foreign('voucher_id')->references('id')->on('vouchers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paket_layanan_konseling_id')->references('id')->on('paket_layanan_konseling')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('konseling_id')->references('id')->on('layanan_konseling')->onDelete('cascade');
            $table->foreign('psikolog_id')->references('id')->on('psikolog_mentorings')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('paket_layanan_mentoring_id')->references('id')->on('paket_layanan_mentoring')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_layanans');
    }
};
