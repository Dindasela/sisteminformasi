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
            $value->jenis = "SKD";
        }
        $sk_kematian = SuratKeluarKematian::get();
        foreach ($sk_kematian as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKK";
        }
        $sk = SuratKeluarKeterangan::get();
        foreach ($sk as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SK";
        }
        $sk_belum_menikah = SuratKeluarBelumMenikah::get();
        foreach ($sk_belum_menikah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKBM";
        }
        $sk_bersih_diri = SuratKeluarBersihDiri::get();
        foreach ($sk_bersih_diri as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKBD";
        }
        $sk_domisili_usaha = SuratKeluarDomisiliUsaha::get();
        foreach ($sk_domisili_usaha as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKDU";
        }
        $sk_kelahiran = SuratKeluarKelahiran::get();
        foreach ($sk_kelahiran as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKKL";
        }
        $sk_penghasilan = SuratKeluarPenghasilan::get();
        foreach ($sk_penghasilan as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKPOT";
        }
        $sk_pindah = SuratKeluarPindah::get();
        foreach ($sk_pindah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKP";
        }
        $sk_sudah_menikah = SuratKeluarSudahMenikah::get();
        foreach ($sk_sudah_menikah as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKSM";
        }
        $sk_tidak_mampu = SuratKeluarTidakMampu::get();
        foreach ($sk_tidak_mampu as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKTM";
        }
        $sk_usaha = SuratKeluarUsaha::get();
        foreach ($sk_usaha as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKU";
        }
        $sk_pengantar_skck = SuratKeluarSKCK::get();
        foreach ($sk_pengantar_skck as $key => $value) {
            $value['kategori'] = "Surat Keluar";
            $value->jenis = "SKPSKCK";
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

    public function lihatarsipsuratmasuk($id)
    {
        $data = SuratMasuk::find($id);
        return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-masuk',compact('data'));
    }

    public function lihatarsipsuratkeluar($jenis, $id)
    {
        if ($jenis == "SKK") {
            $data = SuratKeluarKematian::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SK") {
            $data = SuratKeluarKeterangan::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKBM") {
            $data = SuratKeluarBelumMenikah::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKBD") {
            $data = SuratKeluarBersihDiri::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKDU") {
            $data = SuratKeluarDomisiliUsaha::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKKL") {
            $data = SuratKeluarKelahiran::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKPOT") {
            $data = SuratKeluarPenghasilan::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKP") {
            $data = SuratKeluarPindah::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKSM") {
            $data = SuratKeluarSudahMenikah::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKTM") {
            $data = SuratKeluarTidakMampu::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKU") {
            $data = SuratKeluarUsaha::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKPSKCK") {
            $data = SuratKeluarSKCK::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        } elseif ($jenis == "SKD") {
            $data = SuratKeluarDomisili::find($id);
            return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar', compact(['data', 'jenis']));

        }
    }

    public function destroy($jenis, $id)
    {
        $model = null;
        switch ($jenis) {
            case 'SKD':
                $model = SuratKeluarDomisili::find($id);
                break;
            case 'SKK':
                $model = SuratKeluarKematian::find($id);
                break;
            case 'SK':
                $model = SuratKeluarKeterangan::find($id);
                break;
            case 'SKBM':
                $model = SuratKeluarBelumMenikah::find($id);
                break;
            case 'SKBD':
                $model = SuratKeluarBersihDiri::find($id);
                break;
            case 'SKDU':
                $model = SuratKeluarDomisiliUsaha::find($id);
                break;
            case 'SKKL':
                $model = SuratKeluarKelahiran::find($id);
                break;
            case 'SKPOT':
                $model = SuratKeluarPenghasilan::find($id);
                break;
            case 'SKP':
                $model = SuratKeluarPindah::find($id);
                break;
            case 'SKSM':
                $model = SuratKeluarSudahMenikah::find($id);
                break;
            case 'SKTM':
                $model = SuratKeluarTidakMampu::find($id);
                break;
            case 'SKU':
                $model = SuratKeluarUsaha::find($id);
                break;
            case 'SKPSKCK':
                $model = SuratKeluarSKCK::find($id);
                break;
            default:
                break;
        }

        if ($model) {
            $model->delete();
        }

        return redirect()->route('arsip-surat.index');
    }

    public function destroySuratMasuk($id)
    {
        $model = SuratMasuk::find($id);
        if ($model) {
            $model->delete();
        }

        return redirect()->route('arsip-surat.index');
    }
}
