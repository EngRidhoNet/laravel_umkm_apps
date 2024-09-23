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
        Schema::create('table_pesan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mahasiswa')->foreign('id_mahasiswa')->references('id')->on('table_mahasiswa');
            $table->integer('id_umkm')->foreign('id_umkm')->references('id')->on('table_umkm');
            $table->integer('id_pengirim');
            $table->string('pesan');
            $table->date('tanggal');
            $table->boolean('is_read');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pesan');
    }
};
