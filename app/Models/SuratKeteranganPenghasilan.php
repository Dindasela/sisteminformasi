<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganPenghasilan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_penghasilan';

    protected $fillable = [
            'user_id',
            'nama_lengkap_orang_tua',
            'jenis_kelamin_orang_tua',
            'tempat_lahir_orang_tua',
            'tanggal_lahir_orang_tua',
            'agama_orang_tua',
            'pekerjaan_orang_tua',
            'alamat_orang_tua',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'pekerjaan',
            'agama',
            'alamat',
            'penghasilan_orang_tua',
            'jenis',
            'status',
            'ktp',
            'kk',
            'surat_pengantar_rt',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_lahir_orang_tua' => 'date',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
