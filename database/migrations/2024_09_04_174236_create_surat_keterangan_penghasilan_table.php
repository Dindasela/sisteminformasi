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
        Schema::create('surat_keterangan_penghasilan', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_lengkap_orang_tua');
            $table->string('jenis_kelamin_orang_tua');
            $table->string('tempat_lahir_orang_tua');
            $table->date('tanggal_lahir_orang_tua');
            $table->string('agama_orang_tua');
            $table->string('pekerjaan_orang_tua');
            $table->string('alamat_orang_tua');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('penghasilan_orang_tua');
            $table->string('jenis');
            $table->string('status');
            $table->string('ktp');
            $table->string('kk');
            $table->string('surat_pengantar_rt');
            $table->string('alasan_ditolak')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_penghasilan');
    }
};
