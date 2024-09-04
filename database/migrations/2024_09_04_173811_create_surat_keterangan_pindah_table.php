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
        Schema::create('surat_keterangan_pindah', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('no_kk_asal');
            $table->string('nama_kepala_keluarga_asal');
            $table->string('alamat_asal');
            $table->string('rt_asal');
            $table->string('rw_asal');
            $table->string('desa_asal');
            $table->string('kecamatan_asal');
            $table->string('kabupaten_asal');
            $table->string('provinsi_asal');
            $table->string('kode_pos_asal');
            $table->string('telepon_asal');
            $table->string('alasan_pindah');
            $table->string('alamat_tujuan_pindah');
            $table->string('rt_pindah');
            $table->string('rw_pindah');
            $table->string('desa_pindah');
            $table->string('kecamatan_pindah');
            $table->string('kabupaten_pindah');
            $table->string('provinsi_pindah');
            $table->string('kode_pos_pindah');
            $table->string('telepon_pindah');
            $table->string('klasifikasi_pindah');
            $table->string('jenis_kepindahan');
            $table->string('status_kk_pindah');
            $table->string('status_kk_tidak_pindah');
            $table->date('rencana_tanggal_pindah');
            $table->integer('jumlah_keluarga_pindah');
            $table->string('nama_pindah');
            $table->string('nik_pindah');
            $table->string('shdck_pindah');
            $table->string('no_kk_tujuan');
            $table->string('nama_kepala_keluarga_tujuan');
            $table->string('nik_kepala_keluarga_tujuan');
            $table->string('alamat_tujuan');
            $table->string('status_kk_tujuan_yang_tidak_pindah');
            $table->date('tangga_kedatangan');
            $table->string('alamat_rumah_tujuan');
            $table->string('rt_tujuan');
            $table->string('rw_tujuan');
            $table->string('desa_tujuan');
            $table->string('kecamatan_tujuan');
            $table->string('kabupaten_tujuan');
            $table->string('provinsi_tujuan');
            $table->integer('jumlah_keluarga_pindah_tujuan');
            $table->string('nama_tujuan');
            $table->string('nik_tujuan');
            $table->string('shdck_tujuan');
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
        Schema::dropIfExists('surat_keterangan_pindah');
    }
};
