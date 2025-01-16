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
        Schema::create('dt_mobils', function (Blueprint $table) {
            $table->integer('id_mobil')->autoIncrement();
            $table->string('nama_mobil')->unique();
            $table->string('merek_mobil');
            $table->string('model_mobil');
            $table->integer('plat_mobil');
            $table->integer('tarif_mobil');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('dt_mobils');
    }
};
