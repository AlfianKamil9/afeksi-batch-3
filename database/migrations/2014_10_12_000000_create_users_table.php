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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id')->nullable();
            $table->string('nama');
            $table->string('avatar')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('password');
            $table->string('email');
            $table->integer('umur')->nullable();
            $table->string('no_whatsapp')->nullable();
            // $table->string('institusi')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->string('domisili')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles_users')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};