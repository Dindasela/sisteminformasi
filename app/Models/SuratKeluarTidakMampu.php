<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluarTidakMampu extends Model
{
    use SoftDeletes;

    protected $table = 'surat_keluar_tidak_mampu';

    protected $fillable = [
        'surat_keterangan_tidak_mampu_id',
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

    public function SuratKeteranganTidakMampu()
    {
        return $this->belongsTo(SuratKeteranganTidakMampu::class);
    }
}
