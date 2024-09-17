<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluarBelumMenikah;
use App\Models\SuratKeluarBersihDiri;
use App\Models\SuratKeluarDomisili;
use App\Models\SuratKeluarDomisiliUsaha;
use App\Models\SuratKeluarKelahiran;
use App\Models\SuratKeluarKematian;
use App\Models\SuratKeluarKeterangan;
use App\Models\SuratKeluarPenghasilan;
use App\Models\SuratKeluarPindah;
use App\Models\SuratKeluarSKCK;
use App\Models\SuratKeluarSudahMenikah;
use App\Models\SuratKeluarTidakMampu;
use Illuminate\Http\Request;

class VerifikasiSuksesController extends Controller
{
    public function show(Request $request)
    {
        $jenis = $request->query('jenis');
        $id = $request->query('id');

        if ($jenis == 'SKD') {
            $data = SuratKeluarDomisili::where('surat_keterangan_domisili_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SK') {
            $data = SuratKeluarKeterangan::where('surat_keterangan_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKBM') {
            $data = SuratKeluarBelumMenikah::where('surat_keterangan_belum_menikah_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKBD') {
            $data = SuratKeluarBersihDiri::where('surat_keterangan_bersih_diri_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKDU') {
            $data = SuratKeluarDomisiliUsaha::where('surat_keterangan_domisili_usaha_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKKL') {
            $data = SuratKeluarKelahiran::where('surat_keterangan_kelahiran_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKPSKCK') {
            $data = SuratKeluarSKCK::where('surat_keterangan_skck_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKK') {
            $data = SuratKeluarKematian::where('surat_keterangan_kematian_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKPOT') {
            $data = SuratKeluarPenghasilan::where('surat_keterangan_penghasilan_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKP') {
            $data = SuratKeluarPindah::where('surat_keterangan_pindah_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKSM') {
            $data = SuratKeluarSudahMenikah::where('surat_keterangan_sudah_menikah_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
        if ($jenis == 'SKTM') {
            $data = SuratKeluarTidakMampu::where('surat_keterangan_tidak_mampu_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
    }
}
