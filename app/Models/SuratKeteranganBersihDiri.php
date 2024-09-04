<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganBersihDiri extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_bersih_diri';
    protected $fillable = [
            'user_id',
            'nama_lengkap_bapak',
            'umur_bapak',
            'warga_negara_bapak',
            'agama_bapak',
            'pekerjaan_bapak',
            'alamat_bapak',
            'nama_lengkap_ibu',
            'umur_ibu',
            'warga_negara_ibu',
            'agama_ibu',
            'pekerjaan_ibu',
            'alamat_ibu',
            'nama_lengkap_anak',
            'umur_anak',
            'warga_negara_anak',
            'agama_anak',
            'pekerjaan_anak',
            'alamat_anak',
            'keperluan',
            'jenis',
            'status',
            'ktp',
            'kk',
            'surat_pengantar_rt',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
