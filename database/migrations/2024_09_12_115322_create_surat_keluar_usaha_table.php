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
        Schema::create('surat_keluar_usaha', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('surat_keterangan_usaha_id');
            $table->foreign('surat_keterangan_usaha_id')->references('id')->on('surat_keterangan_usaha');
            $table->string('jenis_dokumen');
            $table->string('nomor_surat');
            $table->string('nama_pemohon');
            $table->string('nik');
            $table->string('pembuat_pemohonan');
            $table->date('tanggal_diterima');
            $table->string('file');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar_usaha');
    }
};
