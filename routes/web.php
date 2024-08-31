<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(GeneralPage::class)->group(function () {
    // Awal Home
    Route::get('/', 'home');
    // Akhir Home

    // Awal User
    Route::get('/login-user', 'loginuser');
    Route::get('/daftar-user', 'daftaruser');
    Route::get('/profil-desa', 'profildesa');
    Route::get('/visi-misi', 'visimisi');
    Route::get('/sejarah', 'sejarah');
    Route::get('/layanan-verifikasi-dokumen', 'layananverifikasidokumen');
    Route::get('/layanan-verifikasi-sukses', 'layananverifikasisukses');
    Route::get('/layanan-verifikasi-gagal', 'layananverifikasigagal');
    Route::get('/layanan-pelaporan', 'layananpelaporan');
    Route::get('/layanan-form-pelaporan', 'layananformpelaporan');
    Route::get('/layanan-pengajuan-dokumen', 'layananpengajuandokumen');
    Route::get('/layanan-form-permohonan', 'layananformpermohonan');
    Route::get('/layanan-status-permohonan', 'layananstatuspermohonan');
    Route::get('/layanan-status-ditolak', 'layananstatusditolak');
    Route::get('/informasi-berita', 'informasiberita');
    Route::get('/informasi-detail-berita', 'informasidetailberita');
    Route::get('/informasi-pengumuman', 'informasipengumuman');
    Route::get('/galeri-foto-video', 'galerifotovideo');
    // Awal Pengajuan Surat
    Route::get('/pengajuan-surat-domisili', 'pengajuansuratdomisili');
    Route::get('/pengajuan-surat-domisili-usaha', 'pengajuansuratdomisiliusaha');
    Route::get('/pengajuan-surat-tidak-mampu', 'pengajuansurattidakmampu');
    Route::get('/pengajuan-surat-keterangan-kematian', 'pengajuansuratketerangankematian');
    Route::get('/pengajuan-surat-keterangan', 'pengajuansuratketerangan');
    Route::get('/pengajuan-surat-keterangan-sudah-menikah', 'pengajuansuratketerangansudahmenikah');
    Route::get('/pengajuan-surat-keterangan-bersih-diri', 'pengajuansuratketeranganbersihdiri');
    Route::get('/pengajuan-surat-keterangan-usaha', 'pengajuansuratketeranganusaha');
    Route::get('/pengajuan-surat-keterangan-pindah', 'pengajuansuratketeranganpindah');
    Route::get('/pengajuan-surat-keterangan-penghasilan-orang-tua', 'pengajuansuratketeranganpenghasilanorangtua');
    Route::get('/pengajuan-surat-keterangan-belum-menikah', 'pengajuansuratketeranganbelummenikah');
    Route::get('/pengajuan-surat-keterangan-kelahiran', 'pengajuansuratketerangankelahiran');
    Route::get('/pengajuan-surat-pengantar-skck', 'pengajuansuratpengantarskck');
    Route::post('/save-photo', [PhotoController::class, 'store'])->name('save-photo');
    // Akhir Pengjuan Surat
    // Akhir User

    // Awal Admin
    Route::get('/login-admin', 'loginadmin');
    Route::post('/login-admin', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
    Route::get('/manajemen-surat', 'manajemensurat');
    Route::get('/surat-masuk', 'suratmasuk');
    Route::get('/tambah-surat-masuk', 'tambahsuratmasuk');
    Route::get('/lihat-surat-masuk', 'lihatsuratmasuk');
    Route::get('/arsip-surat', 'arsipsurat');
    Route::get('/lihat-arsip-surat-masuk', 'lihatarsipsuratmasuk');
    Route::get('/lihat-arsip-surat-keluar', 'lihatarsipsuratkeluar');
    Route::get('/tambah-surat-keluar', 'tambahsuratkeluar');
    Route::get('/lihat-surat-keluar', 'lihatsuratkeluar');

    Route::get('/laporan-masuk', 'laporanmasuk');
    Route::get('/lihat-laporan', 'lihatlaporan');
    Route::get('/informasi', 'informasi');

    //Start Berita
    Route::get('/daftar-berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/tambah-berita', 'tambahberita');
    Route::post('/tambah-berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/edit-berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    //Akhir Berita

    //Start
    Route::get('/daftar-pengumuman', 'daftarpengumuman');
    Route::get('/tambah-pengumuman', 'tambahpengumuman');
    Route::get('/edit-pengumuman', 'editpengumuman');
    Route::get('/list-galeri', 'listgaleri');
    Route::get('/tambah-foto-video', 'tambahfotovideo');
    Route::get('/edit-foto-video', 'editfotovideo');
    Route::get('/daftar-akun', 'daftarakun');
    Route::get('/lihat-akun', 'lihatakun');
    Route::get('/permohonan-akun', 'permohonanakun');
    Route::get('/lihat-permohonan-akun', 'lihatpermohonanakun');
    // Akhir Admin
});
