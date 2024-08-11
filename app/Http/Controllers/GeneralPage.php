<?php

namespace App\Http\Controllers;

class GeneralPage extends Controller
{
    // Awal Home
    function home() {
        return view('/home');
    }
    // Akhir Home

    // Awal User
    function loginuser () {
        return view('pages/user/login');
    }
    function daftaruser () {
        return view('pages/user/daftar');
    }
    function profildesa () {
        return view('pages/user/profil-desa/profil-desa');
    }
    function visimisi () {
        return view('pages/user/profil-desa/visi-misi');
    }
    function sejarah () {
        return view('pages/user/profil-desa/sejarah');
    }
    function layananverifikasidokumen () {
        return view('pages/user/layanan/verifikasi-dokumen');
    }
    function layananverifikasisukses () {
        return view('pages/user/layanan/verifikasi-sukses');
    }
    function layananverifikasigagal () {
        return view('pages/user/layanan/verifikasi-gagal');
    }
    function layananpelaporan () {
        return view('pages/user/layanan/pelaporan');
    }
    function layananformpelaporan () {
        return view('pages/user/layanan/form-pelaporan');
    }
    function layananpengajuandokumen () {
        return view('pages/user/layanan/pengajuan-dokumen');
    }
    function layananformpermohonan () {
        return view('pages/user/layanan/form-permohonan');
    }
    function informasiberita () {
        return view('pages/user/informasi/berita');
    }
    function informasidetailberita () {
        return view('pages/user/informasi/detail-berita');
    }
    function informasipengumuman () {
        return view('pages/user/informasi/pengumuman');
    }
    function galerifotovideo () {
        return view('pages/user/galeri/foto-video');
    }


    // Awal Pengajuan Surat
    function pengajuansuratdomisili () {
        return view('pages/user/layanan/pengajuan-surat-domisili');
    }
    function pengajuansuratdomisiliusaha () {
        return view('pages/user/layanan/pengajuan-surat-domisili-usaha');
    }
    function pengajuansurattidakmampu () {
        return view('pages/user/layanan/pengajuan-surat-tidak-mampu');
    }
    function pengajuansuratketerangankematian () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-kematian');
    }
    function pengajuansuratketerangan () {
        return view('pages/user/layanan/pengajuan-surat-keterangan');
    }
    function pengajuansuratketerangansudahmenikah () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-sudah-menikah');
    }
    function pengajuansuratketeranganbersihdiri () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-bersih-diri');
    }
    function pengajuansuratketeranganusaha () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-usaha');
    }
    function pengajuansuratketeranganpindah () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-pindah');
    }
    function pengajuansuratketeranganpenghasilanorangtua () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-penghasilan-orang-tua');
    }
    function pengajuansuratketeranganbelummenikah () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-belum-menikah');
    }
    function pengajuansuratketerangankelahiran () {
        return view('pages/user/layanan/pengajuan-surat-keterangan-kelahiran');
    }
    function pengajuansuratpengantarskck () {
        return view('pages/user/layanan/pengajuan-surat-pengantar-skck');
    }
    // Akhir Pengajuan Surat

    function layananstatuspermohonan () {
        return view('pages/user/layanan/status-permohonan');
    }
    function layananstatusditolak () {
        return view('pages/user/layanan/status-ditolak');
    }

    // Akhur User

    // Awal Admin
    function dashboard () {
        return view('pages/admin/dashboard');
    }
    // Akhir Admin
}
