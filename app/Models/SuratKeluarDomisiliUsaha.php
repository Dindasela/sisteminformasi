<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluarDomisiliUsaha extends Model
{
    use SoftDeletes;

    protected $table = 'surat_keluar_domisili_usaha';

    protected $fillable = [
        'surat_keterangan_domisili_usaha_id',
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

    public function suratKeteranganDomisiliUsaha()
    {
        return $this->belongsTo(SuratKeteranganDomisiliUsaha::class);
    }
}