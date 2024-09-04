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
        Schema::create('surat_keterangan_sudah_menikah', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_lengkap_istri');
            $table->string('jenis_kelamin_istri');
            $table->string('tempat_lahir_istri');
            $table->date('tanggal_lahir_istri');
            $table->string('agama_istri');
            $table->string('status_perkawinan_istri');
            $table->string('pekerjaan_istri');
            $table->string('alamat_istri');
            $table->string('nama_lengkap_suami');
            $table->string('jenis_kelamin_suami');
            $table->string('tempat_lahir_suami');
            $table->date('tanggal_lahir_suami');
            $table->string('agama_suami');
            $table->string('status_perkawinan_suami');
            $table->string('pekerjaan_suami');
            $table->string('alamat_suami');
            $table->string('lokasi_pernikahan');
            $table->date('tanggal_pernikahan');
            $table->time('jam');
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
        Schema::dropIfExists('surat_keterangan_sudah_menikah');
    }
};
