<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganDomisiliUsaha extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_domisili_usaha';

    protected $fillable = [
            'user_id',
            'nama_lengkap',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',
            'pekerjaan',
            'status_perkawinan',
            'alamat_kk',
            'nama_lembaga',
            'npsn',
            'tahun_berdiri',
            'alamat_lembaga',
            'kelurahan',
            'kecamatan',
            'kota',
            'provinsi',
            'keperluan',
            'jenis',
            'status',
            'foto_ktp',
            'foto_kk',
            'foto_surat_pengantar',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
