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
    function loginadmin () {
        return view('pages/admin/login-admin');
    }
    function dashboard () {
        return view('pages/admin/dashboard');
    }
    function suratmasuk () {
        return view('pages/admin/manajemen-surat/surat-masuk/surat-masuk');
    }
    function tambahsuratmasuk () {
        return view('pages/admin/manajemen-surat/surat-masuk/tambah-surat-masuk');
    }
    function lihatsuratmasuk () {
        return view('pages/admin/manajemen-surat/surat-masuk/lihat-surat-masuk');
    }
    function arsipsurat () {
        return view('pages/admin/manajemen-surat/arsip-surat/arsip-surat');
    }
    function lihatarsipsuratmasuk () {
        return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-masuk');
    }
    function lihatarsipsuratkeluar () {
        return view('pages/admin/manajemen-surat/arsip-surat/lihat-arsip-surat-keluar');
    }
    function tambahsuratkeluar () {
        return view('pages/admin/manajemen-surat/surat-keluar/tambah-surat-keluar');
    }
    function lihatsuratkeluar () {
        return view('pages/admin/manajemen-surat/surat-keluar/lihat-surat-keluar');
    }
    function laporanmasuk () {
        return view('pages/admin/pelaporan/laporan-masuk');
    }
    function lihatlaporan () {
        return view('pages/admin/pelaporan/lihat-laporan');
    }
    function informasi () {
        return view('pages/admin/informasi/informasi');
    }
    function daftarberita () {
        return view('pages/admin/informasi/daftar-berita');
    }
    function tambahberita () {
        return view('pages/admin/informasi/tambah-berita');
    }
    function editberita () {
        return view('pages/admin/informasi/edit-berita');
    }
    function daftarpengumuman () {
        return view('pages/admin/informasi/daftar-pengumuman');
    }
    function tambahpengumuman () {
        return view('pages/admin/informasi/tambah-pengumuman');
    }
    function editpengumuman () {
        return view('pages/admin/informasi/edit-pengumuman');
    }
    function listgaleri () {
        return view('pages/admin/galeri/list-galeri');
    }
    function tambahfotovideo () {
        return view('pages/admin/galeri/tambah-foto-video');
    }
    function editfotovideo () {
        return view('pages/admin/galeri/edit-foto-video');
    }
    function daftarakun () {
        return view('pages/admin/kelolaakun/daftar-akun');
    }
    function lihatakun () {
        return view('pages/admin/kelolaakun/lihat-akun');
    }
    function permohonanakun () {
        return view('pages/admin/kelolaakun/permohonan-akun');
    }
    function lihatpermohonanakun () {
        return view('pages/admin/kelolaakun/lihat-permohonan-akun');
    }
    // Awal Pengajuan Surat
    function manajemensurat () {
        return view('pages/admin/manajemen-surat/manajemen-surat');
    }
    function suratketerangandomisili () {
        return view('pages/admin/manajemen-surat/pengajuan-surat/surat-keterangan-domisili');
    }
    function suratketerangandomisiliusaha () {
        return view('pages/admin/manajemen-surat/pengajuan-surat/surat-keterangan-domisili-usaha');
    }
    function suratketerangantidakmampu () {
        return view('pages/admin/manajemen-surat/pengajuan-surat/surat-keterangan-tidak-mampu');
    }
    function suratketerangankematian () {
        return view('pages/admin/manajemen-surat/pengajuan-surat/surat-keterangan-kematian');
    }
    // Akhir Pengajuan Surat 
    // Akhir Admin
}
