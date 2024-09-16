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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('nomor_surat', 100);
            $table->string('jenis_surat', 100);
            $table->string('perihal', 100);
            $table->string('pengirim', 100);
            $table->date('tanggal_surat');
            $table->date('tanggal_terima');
            $table->string('file', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
