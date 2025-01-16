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
        Schema::create('dt_sewas', function (Blueprint $table) {
            $table->integer('id_sewa')->autoIncrement();
            $table->integer('id_mobil')->unique();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            
            $table->integer('total_tarif');
            $table->string('status_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dt_sewas');
    }
};
