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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->integer('id_pengguna')->autoIncrement();
            $table->integer('id_user')->unique();
            $table->string('nama_pengguna');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->integer('nomor_sim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
