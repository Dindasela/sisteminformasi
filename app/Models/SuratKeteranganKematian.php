<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganKematian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_kematian';
    protected $fillable = [
            'user_id',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',
            'pekerjaan',
            'alamat',
            'hari',
            'tanggal_kematian',
            'jam_kematian',
            'tempat_kematian',
            'penyebab_kematian',
            'tempat_pemakaman',
            'jenis',
            'status',
            'ktp',
            'kk',
            'surat_pengantar_rt',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'jam_kematian' => 'time',
        'tanggal_kematian' => 'date',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
