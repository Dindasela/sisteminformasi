<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    protected $fillable = [
        'user_id',
        'jenis',
        'nama',
        'deskripsi',
        'tanggal',
        'lokasi',
        'file',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
