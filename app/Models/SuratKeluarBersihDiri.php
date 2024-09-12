<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarBersihDiri extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar_bersih_diri';

    protected $fillable = [
        'surat_keterangan_bersih_diri_id',
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

    public function suratKeteranganBersihDiri()
    {
        return $this->belongsTo(SuratKeteranganBersihDiri::class);
    }
}
