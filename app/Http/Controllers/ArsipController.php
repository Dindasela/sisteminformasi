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
use App\Models\SuratKeluarUsaha;
use App\Models\SuratMasuk;

class ArsipController extends Controller
{
    public function index()
    {
        $sk_domisili = SuratKeluarDomisili::with(['User'])->get();
        $sk_kematian = SuratKeluarKematian::with(['User'])->get();
        $sk = SuratKeluarKeterangan::with(['User'])->get();
        $sk_belum_menikah = SuratKeluarBelumMenikah::with(['User'])->get();
        $sk_bersih_diri = SuratKeluarBersihDiri::with(['User'])->get();
        $sk_domisili_usaha = SuratKeluarDomisiliUsaha::with(['User'])->get();
        $sk_kelahiran = SuratKeluarKelahiran::with(['User'])->get();
        $sk_penghasilan = SuratKeluarPenghasilan::with(['User'])->get();
        $sk_pindah = SuratKeluarPindah::with(['User'])->get();
        $sk_sudah_menikah = SuratKeluarSudahMenikah::with(['User'])->get();
        $sk_tidak_mampu = SuratKeluarTidakMampu::with(['User'])->get();
        $sk_usaha = SuratKeluarUsaha::with(['User'])->get();
        $sk_pengantar_skck = SuratKeluarSKCK::with(['User'])->get();
        $sm = SuratMasuk::get();

        $datas = collect([$sk_domisili, $sk_kematian, $sk, $sk_belum_menikah, $sk_bersih_diri, $sk_domisili_usaha, $sk_kelahiran, $sk_penghasilan, $sk_pindah, $sk_sudah_menikah, $sk_tidak_mampu, $sk_usaha, $sk_pengantar_skck, $sm]);

        return view('pages.admin.manajemen-surat.arsip-surat.arsip-surat', compact('datas'));
    }
}