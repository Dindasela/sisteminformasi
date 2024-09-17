<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarSKCK extends Model
{
    protected $table = 'surat_keluar_skck';

    protected $fillable = [
        'surat_pengantar_skck_id',
        'jenis_dokumen',
        'nomor_surat',
        'nama_pemohon',
        'nik',
        'pembuat_pemohonan',
        'tanggal_diterima',
        'file',
    ];

    protected $casts = [
        'tanggal_diterima' => 'date',
    ];

    public function suratPengantarSkck()
    {
        return $this->belongsTo(SuratPengantarSKCK::class);
    }
}
