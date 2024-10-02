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
        Schema::table('table_umkm', function (Blueprint $table) {
            $table->string("informasi_pemilik")->nullable();
            $table->string("informasi_bisnis")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_umkm', function (Blueprint $table) {
            $table->dropColumn("informasi_pemilik");
            $table->dropColumn("informasi_bisnis");
        });
    }
};
