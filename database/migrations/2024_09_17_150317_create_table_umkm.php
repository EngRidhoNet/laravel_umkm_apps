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
        Schema::create('table_umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->string('foto_profil');
            $table->string('foto_sampul');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_umkm');
    }
};
