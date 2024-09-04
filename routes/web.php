<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;

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
    Route::get('/', 'home')->name('home');
    // Akhir Home

    // Awal User
    Route::get('/login-user', 'loginuser');
    Route::get('/daftar-user', 'daftaruser');
    Route::post('/daftar-user', [UserController::class, 'register'])->name('user.register');
    Route::get('/profil-desa', 'profildesa');
    Route::get('/visi-misi', 'visimisi');
    Route::get('/sejarah', 'sejarah');
    Route::get('/layanan-verifikasi-dokumen', 'layananverifikasidokumen');
    Route::get('/layanan-verifikasi-sukses', 'layananverifikasisukses');
    Route::get('/layanan-verifikasi-gagal', 'layananverifikasigagal');
    Route::get('/layanan-pelaporan', 'layananpelaporan');
    Route::get('/layanan-form-pelaporan', 'layananformpelaporan');
    Route::get('/layanan-pengajuan-dokumen', 'layananpengajuandokumen')->name('layanan-pengajuan-dokumen');
    Route::get('/layanan-form-permohonan', 'layananformpermohonan');
    Route::get('/layanan-status-permohonan', 'layananstatuspermohonan');
    Route::get('/layanan-status-ditolak', 'layananstatusditolak');
    Route::get('/informasi-berita', [BeritaController::class,'indexUser'])->name('informasi-berita.index');
    Route::get('/informasi-detail-berita', 'informasidetailberita');
    Route::get('/informasi-pengumuman', 'informasipengumuman');
    Route::get('/galeri-foto-video', 'galerifotovideo');
    // Awal Pengajuan Surat
    Route::get('/pengajuan-surat-domisili', 'pengajuansuratdomisili');
    Route::post('/pengajuan-surat-domisili', [SuratController::class, 'createSKD'])->name('pengajuan-surat-domisili.post');
    Route::get('/pengajuan-surat-domisili-usaha', 'pengajuansuratdomisiliusaha');
    Route::post('/pengajuan-surat-domisili-usaha', [SuratController::class, 'createSKDU'])->name('pengajuan-surat-domisili-usaha.post');
    Route::get('/pengajuan-surat-tidak-mampu', 'pengajuansurattidakmampu');
    Route::post('/pengajuan-surat-tidak-mampu', [SuratController::class, 'createSKTM'])->name('pengajuan-surat-tidak-mampu.post');
    Route::get('/pengajuan-surat-keterangan-kematian', 'pengajuansuratketerangankematian');
    Route::post('/pengajuan-surat-keterangan-kematian', [SuratController::class, 'createSKK'])->name('pengajuan-surat-keterangan-kematian.post');
    Route::get('/pengajuan-surat-keterangan', 'pengajuansuratketerangan');
    Route::post('/pengajuan-surat-keterangan', [SuratController::class, 'createSK'])->name('pengajuan-surat-keterangan.post');
    Route::get('/pengajuan-surat-keterangan-sudah-menikah', 'pengajuansuratketerangansudahmenikah');
    Route::post('/pengajuan-surat-keterangan-sudah-menikah', [SuratController::class, 'createSKSM'])->name('pengajuan-surat-keterangan-sudah-menikah.post');
    Route::get('/pengajuan-surat-keterangan-bersih-diri', 'pengajuansuratketeranganbersihdiri');
    Route::post('/pengajuan-surat-keterangan-bersih-diri', [SuratController::class, 'createSKBD'])->name('pengajuan-surat-keterangan-bersih-diri.post');
    Route::get('/pengajuan-surat-keterangan-usaha', 'pengajuansuratketeranganusaha');
    Route::post('/pengajuan-surat-keterangan-usaha', [SuratController::class, 'createSKU'])->name('pengajuan-surat-keterangan-usaha.post');
    Route::get('/pengajuan-surat-keterangan-pindah', 'pengajuansuratketeranganpindah');
    Route::post('/pengajuan-surat-keterangan-pindah', [SuratController::class, 'createSKP'])->name('pengajuan-surat-keterangan-pindah.post');
    Route::get('/pengajuan-surat-keterangan-penghasilan-orang-tua', 'pengajuansuratketeranganpenghasilanorangtua');
    Route::post('/pengajuan-surat-keterangan-penghasilan-orang-tua', [SuratController::class, 'createSKP'])->name('pengajuan-surat-keterangan-penghasilan-orang-tua.post');
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
    Route::get('/logout-user', [AuthController::class, 'logoutUser'])->name('logout-user');
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

    //Start Pengumuman
    Route::get('/daftar-pengumuman', [PengumumanController::class,'index'])->name('pengumuman.index');
    Route::get('/tambah-pengumuman', 'tambahpengumuman');
    Route::post('/tambah-pengumuman',[PengumumanController::class,'store'])->name('pengumuman.store');
    Route::get('/edit-pengumuman/{id}', [PengumumanController::class,'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{id}', [PengumumanController::class,'update'])->name('pengumuman.update');
    Route::delete('/pengumuman/{id}',[PengumumanController::class,'destroy'])->name('pengumuman.destroy');
    //Akhir Pengumuman

    //Start Galeri
    Route::get('/list-galeri', [GalleryController::class,'index'])->name('galeri.index');
    Route::get('/tambah-foto-video', 'tambahfotovideo');
    Route::post('/tambah-foto-video', [GalleryController::class,'store'])->name('galeri.store');
    Route::get('/edit-foto-video/{id}', [GalleryController::class,'edit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GalleryController::class,'update'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GalleryController::class,'destroy'])->name('galeri.destroy');
    //Akhir Galeri

    Route::get('/daftar-akun', 'daftarakun');
    Route::get('/lihat-akun', 'lihatakun');
    Route::get('/permohonan-akun', 'permohonanakun');
    Route::get('/lihat-permohonan-akun', 'lihatpermohonanakun');
    // Awal Pengajuan Surat
    Route::get('/manajemen-surat', 'manajemensurat');
    Route::get('/surat-keterangan-domisili', 'suratketerangandomisili');
    Route::get('/surat-keterangan-domisili-usaha', 'suratketerangandomisiliusaha');
    Route::get('/surat-keterangan-tidak-mampu', 'suratketerangantidakmampu');
    Route::get('/surat-keterangan-kematian', 'suratketerangankematian');
    Route::get('/surat-keterangan', 'suratketerangan');
    Route::get('/surat-keterangan-sudah-menikah', 'suratketerangansudahmenikah');
    Route::get('/surat-keterangan-bersih-diri', 'suratketeranganbersihdiri');
    Route::get('/surat-keterangan-usaha', 'suratketeranganusaha');
    Route::get('/surat-keterangan-belum-menikah', 'suratketeranganbelummenikah');
    Route::get('/surat-keterangan-kelahiran', 'suratketerangankelahiran');
    Route::get('/surat-keterangan-pengantar-skck', 'suratketeranganpengantarskck');
    Route::get('/surat-keterangan-penghasilan', 'suratketeranganpenghasilan');
    Route::get('/surat-keterangan-pindah', 'suratketeranganpindah');
    // Akhir Pengajuan Surat
    // Akhir Admin
});
