<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluarKematian extends Model
{
    use SoftDeletes;

    protected $table = 'surat_keluar_kematian';

    protected $fillable = [
        'surat_keterangan_kematian_id',
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

    public function suratKeteranganKematian()
    {
        return $this->belongsTo(SuratKeteranganKematian::class);
    }
}