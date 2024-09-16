<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk';

    protected $fillable = [
        'nomor_surat',
        'perihal',
        'pengirim',
        'jenis_surat',
        'tanggal_surat',
        'tanggal_terima',
        'file',
    ];

    protected $dates = [
        'tanggal_surat',
        'tanggal_terima',
    ];

    public function getTanggalSuratAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
