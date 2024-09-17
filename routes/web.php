<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\TemplateController;
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
    Route::get('/layanan-pelaporan', 'layananpelaporan')->name('layanan-pelaporan.auth');
    Route::get('/layanan-form-pelaporan', [LaporanController::class, 'create'])->name('layanan-form-pelaporan');
    Route::post('/layanan-form-pelaporan', [LaporanController::class, 'store'])->name('layanan-form-pelaporan.post');
    Route::get('/layanan-pengajuan-dokumen', 'layananpengajuandokumen')->name('layanan-pengajuan-dokumen');
    Route::get('/layanan-form-permohonan', 'layananformpermohonan');
    Route::get('/layanan-status-permohonan', [SuratController::class, 'statusPermohonanView'])->name('layanan-status-permohonan.index');
    Route::get('/layanan-status-ditolak', 'layananstatusditolak');
    Route::get('/berita', [BeritaController::class, 'indexUser'])->name('berita.show');
    Route::get('/detail-berita', 'detailberita');
    Route::get('/pengumuman', [PengumumanController::class, 'indexUser'])->name('pengumuman.show');
    Route::get('/galeri-foto-video', [GalleryController::class, 'indexUser'])->name('galeri-foto-video.index');
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
    // Route::get('/manajemen-surat', 'manajemensurat');

    // Start Surat Masuk
    Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
    Route::get('/tambah-surat-masuk', 'tambahsuratmasuk');
    Route::post('/tambah-surat-masuk', [SuratMasukController::class, 'store'])->name('surat-masuk.store');
    Route::get('/lihat-surat-masuk/{id}', [SuratMasukController::class, 'edit'])->name('surat-masuk.edit');
    Route::put('/surat-masuk/{id}', [SuratMasukController::class, 'update'])->name('surat-masuk.update');
    Route::delete('/surat-masuk/{id}', [SuratMasukController::class, 'destroy'])->name('surat-masuk.destroy');
    // End Surat Masuk

    Route::get('/arsip-surat', 'arsipsurat');
    Route::get('/lihat-arsip-surat-masuk', 'lihatarsipsuratmasuk');
    Route::get('/lihat-arsip-surat-keluar', 'lihatarsipsuratkeluar');
    Route::get('/tambah-surat-keluar', 'tambahsuratkeluar')->name('tambah-surat-keluar.index');
    Route::post('/tambah-surat-keluar', [SuratKeluarController::class, 'store'])->name('tambah-surat-keluar.store');
    Route::get('/lihat-surat-keluar', 'lihatsuratkeluar');
    Route::get('/laporan-masuk', [LaporanController::class, 'index'])->name('laporan-masuk.index');
    Route::get('/lihat-laporan/{id}', [LaporanController::class, 'edit'])->name('laporan-masuk.edit');
    Route::delete('/laporan-masuk/{id}', [LaporanController::class, 'destroy'])->name('laporan-masuk.destroy');
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
    Route::delete('delete/akun/{id}', [UserController::class, 'destroy'])->name('akun.destroy');

    //Akhir Akun

    // Awal Pengajuan Surat
    Route::get('/manajemen-surat', [SuratController::class, 'index'])->name('manajemen-surat.index');

    // Start Surat Keterangan Domisili
    Route::get('/surat-keterangan-domisili/{id}', [SuratController::class, 'showSKD'])->name('surat-keterangan-domisili.show');
    Route::post('/verif-skd/{id}', [SuratController::class, 'verifSKD'])->name('verif.skd');
    Route::post('/tolak-skd/{id}', [SuratController::class, 'rejectSKD'])->name('reject.skd');
    // End Surat Keterangan Domisili

    // Start Surat Keterangan Domisili Usaha
    Route::get('/surat-keterangan-domisili-usaha/{id}', [SuratController::class, 'showSKDU'])->name('surat-keterangan-domisili-usaha.show');
    Route::post('/verif-skdu/{id}', [SuratController::class, 'verifSKDU'])->name('verif.skdu');
    Route::post('/tolak-skdu/{id}', [SuratController::class, 'rejectSKDU'])->name('reject.skdu');
    // End Surat Keterangan Domisili Usaha

    // Start Surat Keterangan Tidak Mampu
    Route::get('/surat-keterangan-tidak-mampu/{id}', [SuratController::class, 'showSKTM'])->name('surat-keterangan-tidak-mampu.show');
    Route::post('/verif-sktm/{id}', [SuratController::class, 'verifSKTM'])->name('verif.sktm');
    Route::post('/tolak-sktm/{id}', [SuratController::class, 'rejectSKTM'])->name('reject.sktm');

    // Start Surat Keterangan Kematian
    Route::get('/surat-keterangan-kematian/{id}', [SuratController::class, 'showSKK'])->name('surat-keterangan-kematian.show');
    Route::post('/verif-skk/{id}', [SuratController::class, 'verifSKK'])->name('verif.skk');
    Route::post('/tolak-skk/{id}', [SuratController::class, 'rejectSKK'])->name('reject.skk');
    // End Surat Keterangan Kematian

    // Start Surat Keterangan
    Route::get('/surat-keterangan/{id}', [SuratController::class, 'showSK'])->name('surat-keterangan.show');
    Route::post('/verif-sk/{id}', [SuratController::class, 'verifSK'])->name('verif.sk');
    Route::post('/tolak-sk/{id}', [SuratController::class, 'rejectSK'])->name('reject.sk');
    // End Surat Keterangan


    // Start Surat Keterangan Sudah Menikah
    Route::get('/surat-keterangan-sudah-menikah/{id}', [SuratController::class, 'showSKSM'])->name('surat-keterangan-sudah-menikah.show');
    Route::post('/verif-sksm/{id}', [SuratController::class, 'verifSKSM'])->name('verif.sksm');
    Route::post('/tolak-sksm/{id}', [SuratController::class, 'rejectSKSM'])->name('reject.sksm');
    // End Surat Keterangan Sudah Menikah

    // Start Surat Keterangan Bersih Diri
    Route::get('/surat-keterangan-bersih-diri/{id}', [SuratController::class, 'showSKBD'])->name('surat-keterangan-bersih-diri.show');
    Route::post('/verif-skbd/{id}', [SuratController::class, 'verifSKBD'])->name('verif.skbd');
    Route::post('/tolak-skbd/{id}', [SuratController::class, 'rejectSKBD'])->name('reject.skbd');
    // End Surat Keterangan Bersih Diri

    // Start Surat Keterangan Usaha
    Route::get('/surat-keterangan-usaha/{id}', [SuratController::class, 'showSKU'])->name('surat-keterangan-usaha.show');
    Route::post('/verif-sku/{id}', [SuratController::class, 'verifSKU'])->name('verif.sku');
    Route::post('/tolak-sku/{id}', [SuratController::class, 'rejectSKU'])->name('reject.sku');
    // End Surat Keterangan Usaha

    // Start Surat Keterangan Belum Menikah
    Route::get('/surat-keterangan-belum-menikah/{id}', [SuratController::class, 'showSKBM'])->name('surat-keterangan-belum-menikah.show');
    Route::post('/verif-skbm/{id}', [SuratController::class, 'verifSKBM'])->name('verif.skbm');
    Route::post('/tolak-skbm/{id}', [SuratController::class, 'rejectSKBM'])->name('reject.skbm');
    // End Surat Keterangan Belum Menikah

    // Start Surat Keterangan Kelahiran
    Route::get('/surat-keterangan-kelahiran/{id}', [SuratController::class, 'showSKKL'])->name('surat-keterangan-kelahiran.show');
    Route::post('/verif-skkl/{id}', [SuratController::class, 'verifSKKL'])->name('verif.skkl');
    Route::post('/tolak-skkl/{id}', [SuratController::class, 'rejectSKKL'])->name('reject.skkl');
    // End Surat Keterangan Kelahiran

    // Start Surat Keterangan Pengantar SKCK
    Route::get('/surat-keterangan-pengantar-skck/{id}', [SuratController::class, 'showSKPSKCK'])->name('surat-keterangan-pengantar-skck.show');
    Route::post('/verif-skpskck/{id}', [SuratController::class, 'verifSKPSKCK'])->name('verif.skpskck');
    Route::post('/tolak-skpskck/{id}', [SuratController::class, 'rejectSKPSKCK'])->name('reject.skpskck');
    // End Surat Keterangan Pengantar SKCK

    // Start Surat Keterangan Penghasilan
    Route::get('/surat-keterangan-penghasilan/{id}', [SuratController::class, 'showSKPOT'])->name('surat-keterangan-penghasilan.show');
    Route::post('/verif-skpot/{id}', [SuratController::class, 'verifSKPOT'])->name('verif.skpot');
    Route::post('/tolak-skpot/{id}', [SuratController::class, 'rejectSKPOT'])->name('reject.skpot');
    // End Surat Keterangan Penghasilan

    // Start Surat Keterangan Pindah
    Route::get('/surat-keterangan-pindah/{id}', [SuratController::class, 'showSKP'])->name('surat-keterangan-pindah.show');
    Route::post('/verif-skp/{id}', [SuratController::class, 'verifSKP'])->name('verif.skp');
    Route::post('/tolak-skp/{id}', [SuratController::class, 'rejectSKP'])->name('reject.skp');
    // End Surat Keterangan Pindah

    // Akhir Pengajuan Surat
    // Akhir Admin

    //Test
    Route::get('/test', [SuratKeluarController::class, 'generateQR']);

    //Test Template
    Route::get('/skd', [TemplateController::class, 'surat_keterangan_domisili']);
    Route::get('/skdu', [TemplateController::class, 'surat_keterangan_domisili_tempat']);
});
