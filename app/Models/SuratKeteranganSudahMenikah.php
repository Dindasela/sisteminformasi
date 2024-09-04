<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganSudahMenikah extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_sudah_menikah';

    protected $fillable = [
            'user_id',
            'nama_lengkap_istri',
            'jenis_kelamin_istri',
            'tempat_lahir_istri',
            'tanggal_lahir_istri',
            'agama_istri',
            'status_perkawinan_istri',
            'pekerjaan_istri',
            'alamat_istri',
            'nama_lengkap_suami',
            'jenis_kelamin_suami',
            'tempat_lahir_suami',
            'tanggal_lahir_suami',
            'agama_suami',
            'status_perkawinan_suami',
            'pekerjaan_suami',
            'alamat_suami',
            'lokasi_pernikahan',
            'tanggal_pernikahan',
            'jam',
            'jenis',
            'status',
            'foto_ktp',
            'foto_kk',
            'foto_surat_pengantar',
    ];

    protected $casts = [
        'tanggal_pernikahan' => 'date',
        'tanggal_lahir_istri' => 'date',
        'tanggal_lahir_suami' => 'date',
    ];

    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
