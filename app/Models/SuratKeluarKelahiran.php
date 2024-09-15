<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluarKelahiran extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar_kelahiran';

    protected $fillable = [
        'surat_keterangan_kelahiran_id',
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

    public function suratKeteranganKelahiran()
    {
        return $this->belongsTo(SuratKeteranganKelahiran::class);
    }
}
