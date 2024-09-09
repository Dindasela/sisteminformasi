<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikasiSuksesController;

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
    Route::get('/layanan-verifikasi-sukses', [VerifikasiSuksesController::class, 'show'])->name('layanan-verifikasi-sukses');
    Route::post('/generate-qr', [SuratKeluarController::class, 'generateQR'])->name('generate-qr.store');
    Route::get('/layanan-verifikasi-gagal', 'layananverifikasigagal');
    Route::get('/layanan-pelaporan', 'layananpelaporan');
    Route::get('/layanan-form-pelaporan', 'layananformpelaporan');
    Route::get('/layanan-pengajuan-dokumen', 'layananpengajuandokumen')->name('layanan-pengajuan-dokumen');
    Route::get('/layanan-form-permohonan', 'layananformpermohonan');
    Route::get('/layanan-status-permohonan', [SuratController::class, 'statusPermohonanView'])->name('layanan-status-permohonan.index');
    Route::get('/layanan-status-ditolak', 'layananstatusditolak');
    Route::get('/berita', [BeritaController::class, 'indexUser'])->name('berita.show');
    Route::get('/detail-berita', 'detailberita');
    Route::get('/pengumuman', 'pengumuman');
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
    Route::post('/pengajuan-surat-keterangan-penghasilan-orang-tua', [SuratController::class, 'createSKPOT'])->name('pengajuan-surat-keterangan-penghasilan-orang-tua.post');
    Route::get('/pengajuan-surat-keterangan-belum-menikah', 'pengajuansuratketeranganbelummenikah');
    Route::post('/pengajuan-surat-keterangan-belum-menikah', [SuratController::class, 'createSKBM'])->name('pengajuan-surat-keterangan-belum-menikah.post');
    Route::get('/pengajuan-surat-keterangan-kelahiran', 'pengajuansuratketerangankelahiran');
    Route::post('/pengajuan-surat-keterangan-kelahiran', [SuratController::class, 'createSKKL'])->name('pengajuan-surat-keterangan-kelahiran.post');
    Route::get('/pengajuan-surat-pengantar-skck', 'pengajuansuratpengantarskck');
    Route::post('/pengajuan-surat-pengantar-skck', [SuratController::class, 'createSKPSKCK'])->name('pengajuan-surat-pengantar-skck.post');
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
    Route::get('/tambah-surat-keluar', 'tambahsuratkeluar')->name('tambah-surat-keluar.index');
    Route::post('/tambah-surat-keluar', [SuratKeluarController::class, 'store'])->name('tambah-surat-keluar.store');
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
    Route::get('/daftar-pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/tambah-pengumuman', 'tambahpengumuman');
    Route::post('/tambah-pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('/edit-pengumuman/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
    //Akhir Pengumuman

    //Start Galeri
    Route::get('/list-galeri', [GalleryController::class, 'index'])->name('galeri.index');
    Route::get('/tambah-foto-video', 'tambahfotovideo');
    Route::post('/tambah-foto-video', [GalleryController::class, 'store'])->name('galeri.store');
    Route::get('/edit-foto-video/{id}', [GalleryController::class, 'edit'])->name('galeri.edit');
    Route::put('/galeri/{id}', [GalleryController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/{id}', [GalleryController::class, 'destroy'])->name('galeri.destroy');
    //Akhir Galeri

    //Start Akun
    Route::get('/daftar-akun', [UserController::class, 'daftarAkunIndex'])->name('daftar-akun.index');
    // Route::get('/test', [UserController::class, 'getPermohonanAkun']);
    Route::get('/lihat-akun', [UserController::class, 'daftarAkunShow'])->name('daftar-akun.show');
    Route::get('/permohonan-akun', [UserController::class, 'getPermohonanAkun'])->name('permohonan-akun');
    Route::get('/lihat-permohonan-akun/{id}', [UserController::class, 'show'])->name('lihat-permohonan-akun');
    Route::get('/terima-permohonan/{id}', [UserController::class, 'terimaPermohonan'])->name('terima-permohonan-akun');
    Route::get('/tolak-permohonan/{id}', [UserController::class, 'tolakPermohonan'])->name('tolak-permohonan-akun');
    //Akhir Akun

    // Awal Pengajuan Surat
    Route::get('/manajemen-surat', [SuratController::class, 'index'])->name('manajemen-surat.index');
    Route::get('/surat-keterangan-domisili/{id}', [SuratController::class, 'showSKD'])->name('surat-keterangan-domisili.show');
    Route::post('/verif-skd/{id}', [SuratController::class, 'verifSKD'])->name('verif.skd');
    Route::get('/surat-keterangan-domisili-usaha/{id}', [SuratController::class,'showSKDU'])->name('surat-keterangan-domisili-usaha.show');
    Route::get('/surat-keterangan-tidak-mampu', 'suratketerangantidakmampu');
    Route::get('/surat-keterangan-kematian/{id}', [SuratController::class, 'showSKK'])->name('surat-keterangan-kematian.show');
    Route::get('/surat-keterangan/{id}', [SuratController::class, 'showSK'])->name('surat-keterangan.show');
    Route::get('/surat-keterangan-sudah-menikah/{id}', [SuratController::class, 'showSKSM'])->name('surat-keterangan-sudah-menikah.show');
    Route::get('/surat-keterangan-bersih-diri/{id}', [SuratController::class, 'showSKBD'])->name('surat-keterangan-bersih-diri.show');
    Route::get('/surat-keterangan-usaha', 'suratketeranganusaha');
    Route::get('/surat-keterangan-belum-menikah/{id}', [SuratController::class, 'showSKBM'])->name('surat-keterangan-belum-menikah.show');
    Route::get('/surat-keterangan-kelahiran/{id}', [SuratController::class, 'showSKKL'])->name('surat-keterangan-kelahiran.show');
    Route::get('/surat-keterangan-pengantar-skck', 'suratketeranganpengantarskck');
    Route::get('/surat-keterangan-penghasilan', 'suratketeranganpenghasilan');
    Route::get('/surat-keterangan-pindah', 'suratketeranganpindah');
    // Akhir Pengajuan Surat
    // Akhir Admin

    //Test
    Route::get('/test',[SuratKeluarController::class, 'generateQR']);
});
