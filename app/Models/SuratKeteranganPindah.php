<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeteranganPindah extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surat_keterangan_pindah';

    protected $fillable = [
            'user_id',
            'no_kk_asal',
            'nama_kepala_keluarga_asal',
            'alamat_asal',
            'rt_asal',
            'rw_asal',
            'desa_asal',
            'kecamatan_asal',
            'kabupaten_asal',
            'provinsi_asal',
            'kode_pos_asal',
            'telepon_asal',
            'alasan_pindah',
            'alamat_tujuan_pindah',
            'rt_pindah',
            'rw_pindah',
            'desa_pindah',
            'kecamatan_pindah',
            'kabupaten_pindah',
            'provinsi_pindah',
            'kode_pos_pindah',
            'telepon_pindah',
            'klasifikasi_pindah',
            'jenis_kepindahan',
            'status_kk_pindah',
            'status_kk_tidak_pindah',
            'rencana_tanggal_pindah',
            'jumlah_keluarga_pindah',
            'nama_pindah',
            'nik_pindah',
            'shdck_pindah',
            'no_kk_tujuan',
            'nama_kepala_keluarga_tujuan',
            'nik_kepala_keluarga_tujuan',
            'alamat_tujuan',
            'status_kk_tujuan_yang_tidak_pindah',
            'tangga_kedatangan',
            'alamat_rumah_tujuan',
            'rt_tujuan',
            'rw_tujuan',
            'desa_tujuan',
            'kecamatan_tujuan',
            'kabupaten_tujuan',
            'provinsi_tujuan',
            'jumlah_keluarga_pindah_tujuan',
            'nama_tujuan',
            'nik_tujuan',
            'shdck_tujuan',
            'jenis',
            'status',
            'foto_ktp',
            'foto_kk',
            'foto_surat_pengantar',
    ];

    protected $cast = [
        'rencana_tanggal_pindah' => 'date',
        'tangga_kedatangan' => 'date'
    ];

    public function User() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
