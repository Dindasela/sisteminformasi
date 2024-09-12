<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarBelumMenikah extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar_belum_menikah';

    protected $fillable = [
        'surat_keterangan_belum_menikah_id',
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

    public function suratKeteranganBelumMenikah()
    {
        return $this->belongsTo(SuratKeteranganBelumMenikah::class);
    }
}
