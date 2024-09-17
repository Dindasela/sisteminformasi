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
        $sk_domisili = SuratKeluarDomisili::get();
        foreach ($sk_domisili as $key => $value) {
            $value->kategori = "Surat Keluar";
        }
        $sk_kematian = SuratKeluarKematian::get();
        foreach ($sk_kematian as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk = SuratKeluarKeterangan::get();
        foreach ($sk as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_belum_menikah = SuratKeluarBelumMenikah::get();
        foreach ($sk_belum_menikah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_bersih_diri = SuratKeluarBersihDiri::get();
        foreach ($sk_bersih_diri as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_domisili_usaha = SuratKeluarDomisiliUsaha::get();
        foreach ($sk_domisili_usaha as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_kelahiran = SuratKeluarKelahiran::get();
        foreach ($sk_kelahiran as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_penghasilan = SuratKeluarPenghasilan::get();
        foreach ($sk_penghasilan as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_pindah = SuratKeluarPindah::get();
        foreach ($sk_pindah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_sudah_menikah = SuratKeluarSudahMenikah::get();
        foreach ($sk_sudah_menikah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_tidak_mampu = SuratKeluarTidakMampu::get();
        foreach ($sk_tidak_mampu as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_usaha = SuratKeluarUsaha::get();
        foreach ($sk_usaha as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sk_pengantar_skck = SuratKeluarSKCK::get();
        foreach ($sk_pengantar_skck as $key => $value) {
            $value['kategori'] = "Surat Keluar";
        }
        $sm = SuratMasuk::get();
        foreach ($sm as $key => $value) {
            $value['kategori'] = "Surat Masuk";
        }

        $datas = collect([$sk_domisili, $sk_kematian, $sk, $sk_belum_menikah, $sk_bersih_diri, $sk_domisili_usaha, $sk_kelahiran, $sk_penghasilan, $sk_pindah, $sk_sudah_menikah, $sk_tidak_mampu, $sk_usaha, $sk_pengantar_skck, $sm])->reduce(function ($carry, $item) {
            return $carry->concat($item);
        }, collect());

        return view('pages.admin.manajemen-surat.arsip-surat.arsip-surat', compact('datas'));
    }
}
