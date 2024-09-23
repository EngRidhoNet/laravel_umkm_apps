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
        Schema::create('table_like', function (Blueprint $table) {
            $table->id();
            $table->integer('id_artikel')->foreign('id_artikel')->references('id')->on('table_artikel');
            $table->integer('id_mahasiswa')->foreign('id_mahasiswa')->references('id')->on('table_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_like');
    }
};
