<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganBelumMenikah extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_belum_menikah';

    protected $fillable = [
            'user_id',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'pekerjaan',
            'agama',
            'alamat',
            'jenis',
            'status',
            'ktp',
            'kk',
            'surat_pengantar_rt',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
