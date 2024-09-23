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
        Schema::create('table_artikel', function (Blueprint $table) {
            $table->id();
            $table->integer('id_umkm')->foreign('id_umkm')->references('id')->on('table_umkm');
            $table->string('judul');
            $table->string('isi');
            $table->string('foto');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_artikel');
    }
};
