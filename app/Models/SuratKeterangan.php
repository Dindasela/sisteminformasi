<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeterangan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan';

    protected $fillable = [
            'user_id',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'pekerjaan',
            'alamat',
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

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
