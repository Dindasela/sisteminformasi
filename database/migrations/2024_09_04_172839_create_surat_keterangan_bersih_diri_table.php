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
        Schema::create('surat_keterangan_bersih_diri', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_lengkap_bapak');
            $table->string('umur_bapak');
            $table->string('warga_negara_bapak');
            $table->string('agama_bapak');
            $table->string('pekerjaan_bapak');
            $table->string('alamat_bapak');
            $table->string('nama_lengkap_ibu');
            $table->string('umur_ibu');
            $table->string('warga_negara_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('nama_lengkap_anak');
            $table->string('umur_anak');
            $table->string('warga_negara_anak');
            $table->string('agama_anak');
            $table->string('pekerjaan_anak');
            $table->string('alamat_anak');
            $table->string('keperluan');
            $table->string('jenis');
            $table->string('status');
            $table->string('ktp');
            $table->string('kk');
            $table->string('surat_pengantar_rt');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_bersih_diri');
    }
};
