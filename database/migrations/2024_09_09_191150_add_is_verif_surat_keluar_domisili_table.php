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
        Schema::table('surat_keluar_domisili', function (Blueprint $table) {
            $table->integer('is_verif')->nullable()->comment('0: not verified, 1: verified')->after('file');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat_keluar_domisili', function (Blueprint $table) {
            $table->dropColumn('is_verif');
        });
    }
};
