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
        Schema::create('surat_keterangan_domisili', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('warga_negara');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('alamat_sesuai_kk');
            $table->date('berlaku_sampai');
            $table->string('alamat_saat_ini');
            $table->date('tanggal_di_alamat_saat_ini');
            $table->string('keperluan');
            $table->string('jenis');
            $table->string('status');
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->string('foto_surat_pengantar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_domisili');
    }
};
