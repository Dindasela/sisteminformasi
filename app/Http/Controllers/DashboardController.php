<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
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
use App\Models\SuratKeterangan;
use App\Models\SuratKeteranganBelumMenikah;
use App\Models\SuratKeteranganBersihDiri;
use App\Models\SuratKeteranganDomisili;
use App\Models\SuratKeteranganDomisiliUsaha;
use App\Models\SuratKeteranganKelahiran;
use App\Models\SuratKeteranganKematian;
use App\Models\SuratKeteranganPenghasilan;
use App\Models\SuratKeteranganPindah;
use App\Models\SuratKeteranganSudahMenikah;
use App\Models\SuratKeteranganTidakMampu;
use App\Models\SuratKeteranganUsaha;
use App\Models\SuratMasuk;
use App\Models\SuratPengantarSKCK;

class DashboardController extends Controller
{
    public function index()
    {
        $laporan = Laporan::whereDate('created_at', today())->count();
        $surat_masuk = SuratMasuk::whereDate('created_at', today())->count();

        $sk_domisili = SuratKeteranganDomisili::whereDate('created_at', today())->count();
        $sk_kematian = SuratKeteranganKematian::whereDate('created_at', today())->count();
        $sk = SuratKeterangan::whereDate('created_at', today())->count();
        $sk_belum_menikah = SuratKeteranganBelumMenikah::whereDate('created_at', today())->count();
        $sk_bersih_diri = SuratKeteranganBersihDiri::whereDate('created_at', today())->count();
        $sk_domisili_usaha = SuratKeteranganDomisiliUsaha::whereDate('created_at', today())->count();
        $sk_kelahiran = SuratKeteranganKelahiran::whereDate('created_at', today())->count();
        $sk_penghasilan = SuratKeteranganPenghasilan::whereDate('created_at', today())->count();
        $sk_pindah = SuratKeteranganPindah::whereDate('created_at', today())->count();
        $sk_sudah_menikah = SuratKeteranganSudahMenikah::whereDate('created_at', today())->count();
        $sk_tidak_mampu = SuratKeteranganTidakMampu::whereDate('created_at', today())->count();
        $sk_usaha = SuratKeteranganUsaha::whereDate('created_at', today())->count();
        $sk_pengantar_skck = SuratPengantarSKCK::whereDate('created_at', today())->count();

        $total = $sk_domisili + $sk_kematian + $sk + $sk_belum_menikah + $sk_bersih_diri + $sk_domisili_usaha + $sk_kelahiran + $sk_penghasilan + $sk_pindah + $sk_sudah_menikah + $sk_tidak_mampu + $sk_usaha + $sk_pengantar_skck;

        $sk_domisili = SuratKeteranganDomisili::where('status', 'Diterima')->count();
        $sk_kematian = SuratKeteranganKematian::where('status', 'Diterima')->count();
        $sk = SuratKeterangan::where('status', 'Diterima')->count();
        $sk_belum_menikah = SuratKeteranganBelumMenikah::where('status', 'Diterima')->count();
        $sk_bersih_diri = SuratKeteranganBersihDiri::where('status', 'Diterima')->count();
        $sk_domisili_usaha = SuratKeteranganDomisiliUsaha::where('status', 'Diterima')->count();
        $sk_kelahiran = SuratKeteranganKelahiran::where('status', 'Diterima')->count();
        $sk_penghasilan = SuratKeteranganPenghasilan::where('status', 'Diterima')->count();
        $sk_pindah = SuratKeteranganPindah::where('status', 'Diterima')->count();
        $sk_sudah_menikah = SuratKeteranganSudahMenikah::where('status', 'Diterima')->count();
        $sk_tidak_mampu = SuratKeteranganTidakMampu::where('status', 'Diterima')->count();
        $sk_usaha = SuratKeteranganUsaha::where('status', 'Diterima')->count();
        $sk_pengantar_skck = SuratPengantarSKCK::where('status', 'Diterima')->count();

        $total_diterima = $sk_domisili + $sk_kematian + $sk + $sk_belum_menikah + $sk_bersih_diri + $sk_domisili_usaha + $sk_kelahiran + $sk_penghasilan + $sk_pindah + $sk_sudah_menikah + $sk_tidak_mampu + $sk_usaha + $sk_pengantar_skck;

        $sk_domisili = SuratKeluarDomisili::whereDate('created_at', today())->count();
        $sk_kematian = SuratKeluarKematian::whereDate('created_at', today())->count();
        $sk = SuratKeluarKeterangan::whereDate('created_at', today())->count();
        $sk_belum_menikah = SuratKeluarBelumMenikah::whereDate('created_at', today())->count();
        $sk_bersih_diri = SuratKeluarBersihDiri::whereDate('created_at', today())->count();
        $sk_domisili_usaha = SuratKeluarDomisiliUsaha::whereDate('created_at', today())->count();
        $sk_kelahiran = SuratKeluarKelahiran::whereDate('created_at', today())->count();
        $sk_penghasilan = SuratKeluarPenghasilan::whereDate('created_at', today())->count();
        $sk_pindah = SuratKeluarPindah::whereDate('created_at', today())->count();
        $sk_sudah_menikah = SuratKeluarSudahMenikah::whereDate('created_at', today())->count();
        $sk_tidak_mampu = SuratKeluarTidakMampu::whereDate('created_at', today())->count();
        $sk_usaha = SuratKeluarUsaha::whereDate('created_at', today())->count();
        $sk_pengantar_skck = SuratKeluarSKCK::whereDate('created_at', today())->count();

        $total_surat_keluar = $sk_domisili + $sk_kematian + $sk + $sk_belum_menikah + $sk_bersih_diri + $sk_domisili_usaha + $sk_kelahiran + $sk_penghasilan + $sk_pindah + $sk_sudah_menikah + $sk_tidak_mampu + $sk_usaha + $sk_pengantar_skck;

        $data = [
            'laporan' => $laporan,
            'surat_masuk' => $surat_masuk,
            'total' => $total,
            'total_diterima' => $total_diterima,
            'total_surat_keluar' => $total_surat_keluar,
        ];

        return view('pages.admin.dashboard', compact('data'));
    }
}