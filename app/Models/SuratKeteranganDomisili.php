<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganDomisili extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_domisili';

    protected $fillable = [
            'user_id',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'pekerjaan',
            'warga_negara',
            'agama',
            'status_perkawinan',
            'alamat_sesuai_kk',
            'berlaku_sampai',
            'alamat_saat_ini',
            'tanggal_di_alamat_saat_ini',
            'keperluan',
            'jenis',
            'status',
            'foto_ktp',
            'foto_kk',
            'foto_surat_pengantar',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'berlaku_sampai' => 'date',
        'tanggal_di_alamat_saat_ini' => 'date',
    ];

    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
