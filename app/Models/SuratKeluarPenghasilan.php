<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarPenghasilan extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar_penghasilan';

    protected $fillable = [
        'surat_keterangan_penghasilan_id',
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

    public function suratKeteranganPenghasilan()
    {
        return $this->belongsTo(SuratKeteranganPenghasilan::class);
    }
}
