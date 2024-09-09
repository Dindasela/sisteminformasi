<?php

namespace App\Http\Controllers;

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
use App\Models\SuratPengantarSKCK;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class SuratController extends Controller
{
    public function index()
    {
        $sk_domisili = SuratKeteranganDomisili::with(['User'])->get();
        $sk_kematian = SuratKeteranganKematian::with(['User'])->get();
        $sk = SuratKeterangan::with(['User'])->get();
        $sk_belum_menikah = SuratKeteranganBelumMenikah::with(['User'])->get();
        $sk_bersih_diri = SuratKeteranganBersihDiri::with(['User'])->get();
        $sk_domisili_usaha = SuratKeteranganDomisiliUsaha::with(['User'])->get();
        $sk_kelahiran = SuratKeteranganKelahiran::with(['User'])->get();
        $sk_penghasilan = SuratKeteranganPenghasilan::with(['User'])->get();
        $sk_pindah = SuratKeteranganPindah::with(['User'])->get();
        $sk_sudah_menikah = SuratKeteranganSudahMenikah::with(['User'])->get();
        $sk_tidak_mampu = SuratKeteranganTidakMampu::with(['User'])->get();
        $sk_usaha = SuratKeteranganUsaha::with(['User'])->get();
        $sk_pengantar_skck = SuratPengantarSKCK::with(['User'])->get();

        $datas = collect([$sk_domisili, $sk_kematian, $sk, $sk_belum_menikah, $sk_bersih_diri, $sk_domisili_usaha, $sk_kelahiran, $sk_penghasilan, $sk_pindah, $sk_sudah_menikah, $sk_tidak_mampu, $sk_usaha, $sk_pengantar_skck])
            ->reduce(function ($carry, $item) {
                return $carry->concat($item);
            }, collect());

        return view('pages.admin.manajemen-surat.manajemen-surat', compact('datas'));
    }

    public function showSKD($id)
    {
        $datas = SuratKeteranganDomisili::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-domisili', compact('datas'));
    }

    public function showSKK($id)
    {
        $datas = SuratKeteranganKematian::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-kematian', compact('datas'));
    }

    public function showSK($id)
    {
        $datas = SuratKeterangan::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan', compact('datas'));
    }

    public function showSKBM($id)
    {
        $datas = SuratKeteranganBelumMenikah::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-belum-menikah', compact('datas'));
    }

    public function showSKBD($id)
    {
        $datas = SuratKeteranganBersihDiri::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-bersih-diri', compact('datas'));
    }

    public function showSKDU($id)
    {
        $datas = SuratKeteranganDomisiliUsaha::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-domisili-usaha', compact('datas'));
    }

    public function showSKKL($id)
    {
        $datas = SuratKeteranganKelahiran::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-kelahiran', compact('datas'));
    }

    public function showSKSM($id)
    {
        $datas = SuratKeteranganSudahMenikah::find($id);
        return view('pages.admin.manajemen-surat.pengajuan-surat.surat-keterangan-sudah-menikah', compact('datas'));
    }

    public function verifSKK($id)
    {
        $datas = SuratKeteranganKematian::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKK/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-kematian', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKK', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Kematian Berhasil');
    }

    public function verifSKD($id)
    {
        $datas = SuratKeteranganDomisili::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKD/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-domisili', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKD', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Domisili Berhasil');
    }

    public function verifSK($id)
    {
        $datas = SuratKeterangan::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SK/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SK', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Berhasil');
    }

    public function verifSKBM($id)
    {
        $datas = SuratKeteranganBelumMenikah::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKBM/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-belum-menikah', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKBM', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Belum Menikah Berhasil');
    }

    public function verifSKBD($id)
    {
        $datas = SuratKeteranganBersihDiri::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKBD/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-bersih-diri', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKBD', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Bersih Diri Berhasil');
    }

    public function verifSKDU($id)
    {
        $datas = SuratKeteranganDomisiliUsaha::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKDU/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-domisili-usaha', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKDU', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Domisili Usaha Berhasil');
    }

    public function verifSKKL($id)
    {
        $datas = SuratKeteranganKelahiran::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKKL/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-kelahiran', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKKL', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Kelahiran Berhasil');
    }

    public function verifSKSM($id)
    {
        $datas = SuratKeteranganSudahMenikah::find($id);
        $datas->status = 'Diterima';
        $datas->save();

        $dataArray = $datas->toArray();
        $directoryPath = public_path('Surat/SKSM/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.surat-keterangan-sudah-menikah', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $datas->user->id . '-' . $datas->id . '.pdf');

        return redirect()->route('tambah-surat-keluar.index', ['jenis' => 'SKSM', 'id' => $datas->id])
            ->with('success', 'Verifikasi Surat Keterangan Sudah Menikah Berhasil');
    }
    public function createSKD(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan' => 'required',
            'warga_negara' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'alamat_sesuai_kk' => 'required',
            'berlaku_sampai' => 'required',
            'alamat_saat_ini' => 'required',
            'tanggal_di_alamat_saat_ini' => 'required',
            'keperluan' => 'required',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'foto_surat_pengantar' => 'required',
        ]);

        $ktp = $request->foto_ktp->store('Surat/SKD');
        $kk = $request->foto_kk->store('Surat/SKD');
        $pengantar = $request->foto_surat_pengantar->store('Surat/SKD');

        SuratKeteranganDomisili::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'pekerjaan' => $validateData['pekerjaan'],
            'warga_negara' => $validateData['warga_negara'],
            'agama' => $validateData['agama'],
            'status_perkawinan' => $validateData['status_perkawinan'],
            'alamat_sesuai_kk' => $validateData['alamat_sesuai_kk'],
            'berlaku_sampai' => $validateData['berlaku_sampai'],
            'alamat_saat_ini' => $validateData['alamat_saat_ini'],
            'tanggal_di_alamat_saat_ini' => $validateData['tanggal_di_alamat_saat_ini'],
            'keperluan' => $validateData['keperluan'],
            'foto_ktp' => $ktp,
            'foto_kk' => $kk,
            'foto_surat_pengantar' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKD'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Domisili Berhasil');
    }

    public function createSKDU(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'alamat_kk' => 'required',
            'nama_lembaga' => 'required',
            'npsn' => 'required',
            'tahun_berdiri' => 'required',
            'alamat_lembaga' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'keperluan' => 'required',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'foto_surat_pengantar' => 'required',
        ]);

        $ktp = $request->foto_ktp->store('Surat/SKDU');
        $kk = $request->foto_kk->store('Surat/SKDU');
        $pengantar = $request->foto_surat_pengantar->store('Surat/SKDU');

        SuratKeteranganDomisiliUsaha::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap' => $validateData['nama_lengkap'],
            'nik' => $validateData['nik'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'agama' => $validateData['agama'],
            'pekerjaan' => $validateData['pekerjaan'],
            'status_perkawinan' => $validateData['status_perkawinan'],
            'alamat_kk' => $validateData['alamat_kk'],
            'nama_lembaga' => $validateData['nama_lembaga'],
            'npsn' => $validateData['npsn'],
            'tahun_berdiri' => $validateData['tahun_berdiri'],
            'alamat_lembaga' => $validateData['alamat_lembaga'],
            'kelurahan' => $validateData['kelurahan'],
            'kecamatan' => $validateData['kecamatan'],
            'kota' => $validateData['kota'],
            'provinsi' => $validateData['provinsi'],
            'keperluan' => $validateData['keperluan'],
            'foto_ktp' => $ktp,
            'foto_kk' => $kk,
            'foto_surat_pengantar' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKDU'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Domisili Usaha Berhasil');
    }

    public function createSKTM(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap_orang_tua' => 'required',
            'jenis_kelamin_orang_tua' => 'required',
            'tempat_lahir_orang_tua' => 'required',
            'tanggal_lahir_orang_tua' => 'required',
            'agama_orang_tua' => 'required',
            'pekerjaan_orang_tua' => 'required',
            'alamat_orang_tua' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'keperluan' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKTM');
        $kk = $request->kk->store('Surat/SKTM');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKTM');

        SuratKeteranganTidakMampu::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap_orang_tua' => $validateData['nama_lengkap_orang_tua'],
            'jenis_kelamin_orang_tua' => $validateData['jenis_kelamin_orang_tua'],
            'tempat_lahir_orang_tua' => $validateData['tempat_lahir_orang_tua'],
            'tanggal_lahir_orang_tua' => $validateData['tanggal_lahir_orang_tua'],
            'agama_orang_tua' => $validateData['agama_orang_tua'],
            'pekerjaan_orang_tua' => $validateData['pekerjaan_orang_tua'],
            'alamat_orang_tua' => $validateData['alamat_orang_tua'],
            'nama' => $validateData['nama'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'agama' => $validateData['agama'],
            'pekerjaan' => $validateData['pekerjaan'],
            'alamat' => $validateData['alamat'],
            'keperluan' => $validateData['keperluan'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKTM'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Tidak Mampu Berhasil');
    }

    public function createSKK(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'hari' => 'required',
            'tanggal_kematian' => 'required',
            'jam_kematian' => 'required',
            'tempat_kematian' => 'required',
            'penyebab_kematian' => 'required',
            'tempat_pemakaman' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKK');
        $kk = $request->kk->store('Surat/SKK');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKK');

        SuratKeteranganKematian::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'agama' => $validateData['agama'],
            'pekerjaan' => $validateData['pekerjaan'],
            'alamat' => $validateData['alamat'],
            'hari' => $validateData['hari'],
            'tanggal_kematian' => $validateData['tanggal_kematian'],
            'jam_kematian' => $validateData['jam_kematian'],
            'tempat_kematian' => $validateData['tempat_kematian'],
            'penyebab_kematian' => $validateData['penyebab_kematian'],
            'tempat_pemakaman' => $validateData['tempat_pemakaman'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKK'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Kematian Berhasil');
    }

    public function createSK(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'keperluan' => 'required',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'foto_surat_pengantar' => 'required',
        ]);

        $ktp = $request->foto_ktp->store('Surat/SK');
        $kk = $request->foto_kk->store('Surat/SK');
        $pengantar = $request->foto_surat_pengantar->store('Surat/SK');

        SuratKeterangan::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap' => $validateData['nama_lengkap'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'pekerjaan' => $validateData['pekerjaan'],
            'alamat' => $validateData['alamat'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'keperluan' => $validateData['keperluan'],
            'foto_ktp' => $ktp,
            'foto_kk' => $kk,
            'foto_surat_pengantar' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SK'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Berhasil');
    }

    public function createSKSM(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap_istri' => 'required',
            'jenis_kelamin_istri' => 'required',
            'tempat_lahir_istri' => 'required',
            'tanggal_lahir_istri' => 'required',
            'agama_istri' => 'required',
            'status_perkawinan_istri' => 'required',
            'pekerjaan_istri' => 'required',
            'alamat_istri' => 'required',
            'nama_lengkap_suami' => 'required',
            'jenis_kelamin_suami' => 'required',
            'tempat_lahir_suami' => 'required',
            'tanggal_lahir_suami' => 'required',
            'agama_suami' => 'required',
            'status_perkawinan_suami' => 'required',
            'pekerjaan_suami' => 'required',
            'alamat_suami' => 'required',
            'lokasi_pernikahan' => 'required',
            'tanggal_pernikahan' => 'required',
            'jam' => 'required',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'foto_surat_pengantar' => 'required',
        ]);

        $ktp = $request->foto_ktp->store('Surat/SKSM');
        $kk = $request->foto_kk->store('Surat/SKSM');
        $pengantar = $request->foto_surat_pengantar->store('Surat/SKSM');

        SuratKeteranganSudahMenikah::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap_istri' => $validateData['nama_lengkap_istri'],
            'jenis_kelamin_istri' => $validateData['jenis_kelamin_istri'],
            'tempat_lahir_istri' => $validateData['tempat_lahir_istri'],
            'tanggal_lahir_istri' => $validateData['tanggal_lahir_istri'],
            'agama_istri' => $validateData['agama_istri'],
            'status_perkawinan_istri' => $validateData['status_perkawinan_istri'],
            'pekerjaan_istri' => $validateData['pekerjaan_istri'],
            'alamat_istri' => $validateData['alamat_istri'],
            'nama_lengkap_suami' => $validateData['nama_lengkap_suami'],
            'jenis_kelamin_suami' => $validateData['jenis_kelamin_suami'],
            'tempat_lahir_suami' => $validateData['tempat_lahir_suami'],
            'tanggal_lahir_suami' => $validateData['tanggal_lahir_suami'],
            'agama_suami' => $validateData['agama_suami'],
            'status_perkawinan_suami' => $validateData['status_perkawinan_suami'],
            'pekerjaan_suami' => $validateData['pekerjaan_suami'],
            'alamat_suami' => $validateData['alamat_suami'],
            'lokasi_pernikahan' => $validateData['lokasi_pernikahan'],
            'tanggal_pernikahan' => $validateData['tanggal_pernikahan'],
            'jam' => $validateData['jam'],
            'foto_ktp' => $ktp,
            'foto_kk' => $kk,
            'foto_surat_pengantar' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKSM'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Sudah Menikah Berhasil');
    }

    public function createSKBD(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap_bapak' => 'required',
            'umur_bapak' => 'required',
            'warga_negara_bapak' => 'required',
            'agama_bapak' => 'required',
            'pekerjaan_bapak' => 'required',
            'alamat_bapak' => 'required',
            'nama_lengkap_ibu' => 'required',
            'umur_ibu' => 'required',
            'warga_negara_ibu' => 'required',
            'agama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'nama_lengkap_anak' => 'required',
            'umur_anak' => 'required',
            'warga_negara_anak' => 'required',
            'agama_anak' => 'required',
            'pekerjaan_anak' => 'required',
            'alamat_anak' => 'required',
            'keperluan' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKBD');
        $kk = $request->kk->store('Surat/SKBD');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKBD');

        SuratKeteranganBersihDiri::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap_bapak' => $validateData['nama_lengkap_bapak'],
            'umur_bapak' => $validateData['umur_bapak'],
            'warga_negara_bapak' => $validateData['warga_negara_bapak'],
            'agama_bapak' => $validateData['agama_bapak'],
            'pekerjaan_bapak' => $validateData['pekerjaan_bapak'],
            'alamat_bapak' => $validateData['alamat_bapak'],
            'nama_lengkap_ibu' => $validateData['nama_lengkap_ibu'],
            'umur_ibu' => $validateData['umur_ibu'],
            'warga_negara_ibu' => $validateData['warga_negara_ibu'],
            'agama_ibu' => $validateData['agama_ibu'],
            'pekerjaan_ibu' => $validateData['pekerjaan_ibu'],
            'alamat_ibu' => $validateData['alamat_ibu'],
            'nama_lengkap_anak' => $validateData['nama_lengkap_anak'],
            'umur_anak' => $validateData['umur_anak'],
            'warga_negara_anak' => $validateData['warga_negara_anak'],
            'agama_anak' => $validateData['agama_anak'],
            'pekerjaan_anak' => $validateData['pekerjaan_anak'],
            'alamat_anak' => $validateData['alamat_anak'],
            'keperluan' => $validateData['keperluan'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKBD'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Bersih Diri Berhasil');
    }

    public function createSKU(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'bidang_usaha' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKU');
        $kk = $request->kk->store('Surat/SKU');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKU');

        SuratKeteranganUsaha::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'pekerjaan' => $validateData['pekerjaan'],
            'agama' => $validateData['agama'],
            'alamat' => $validateData['alamat'],
            'nama_usaha' => $validateData['nama_usaha'],
            'alamat_usaha' => $validateData['alamat_usaha'],
            'bidang_usaha' => $validateData['bidang_usaha'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKU'
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Usaha Berhasil');
    }

    public function createSKP(Request $request)
    {
        $validateData = $request->validate([
            'no_kk_asal' => 'required',
            'nama_kepala_keluarga_asal' => 'required',
            'alamat_asal' => 'required',
            'rt_asal' => 'required',
            'rw_asal' => 'required',
            'desa_asal' => 'required',
            'kecamatan_asal' => 'required',
            'kabupaten_asal' => 'required',
            'provinsi_asal' => 'required',
            'kode_pos_asal' => 'required',
            'telepon_asal' => 'required',
            'alasan_pindah' => 'required',
            'alamat_tujuan_pindah' => 'required',
            'rt_pindah' => 'required',
            'rw_pindah' => 'required',
            'desa_pindah' => 'required',
            'kecamatan_pindah' => 'required',
            'kabupaten_pindah' => 'required',
            'provinsi_pindah' => 'required',
            'kode_pos_pindah' => 'required',
            'telepon_pindah' => 'required',
            'klasifikasi_pindah' => 'required',
            'jenis_kepindahan' => 'required',
            'status_kk_pindah' => 'required',
            'status_kk_tidak_pindah' => 'required',
            'rencana_tanggal_pindah' => 'required',
            'jumlah_keluarga_pindah' => 'required',
            'nama_pindah' => 'required',
            'nik_pindah' => 'required',
            'shdck_pindah' => 'required',
            'no_kk_tujuan' => 'required',
            'nama_kepala_keluarga_tujuan' => 'required',
            'nik_kepala_keluarga_tujuan' => 'required',
            'status_kk_tujuan_yang_tidak_pindah' => 'required',
            'tanggal_kedatangan' => 'required',
            'alamat_rumah_tujuan' => 'required',
            'rt_tujuan' => 'required',
            'rw_tujuan' => 'required',
            'desa_tujuan' => 'required',
            'kecamatan_tujuan' => 'required',
            'kabupaten_tujuan' => 'required',
            'provinsi_tujuan' => 'required',
            'jumlah_keluarga_pindah_tujuan' => 'required',
            'nama_tujuan' => 'required',
            'nik_tujuan' => 'required',
            'shdck_tujuan' => 'required',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'foto_surat_pengantar' => 'required',
        ]);
        $nama_pindahan = implode(',', $validateData['nama_pindah']);
        $nik_pindahan = implode(',', $validateData['nik_pindah']);
        $shdck_pindahan = implode(',', $validateData['shdck_pindah']);
        $nama_tujuan = implode(',', $validateData['nama_tujuan']);
        $nik_tujuan = implode(',', $validateData['nik_tujuan']);
        $shdck_tujuan = implode(',', $validateData['shdck_tujuan']);
        $ktp = $request->foto_ktp->store('Surat/SKP');
        $kk = $request->foto_kk->store('Surat/SKP');
        $pengantar = $request->foto_surat_pengantar->store('Surat/SKP');

        SuratKeteranganPindah::create([
            'user_id' => auth()->user()->id,
            'no_kk_asal' => $validateData['no_kk_asal'],
            'nama_kepala_keluarga_asal' => $validateData['nama_kepala_keluarga_asal'],
            'alamat_asal' => $validateData['alamat_asal'],
            'rt_asal' => $validateData['rt_asal'],
            'rw_asal' => $validateData['rw_asal'],
            'desa_asal' => $validateData['desa_asal'],
            'kecamatan_asal' => $validateData['kecamatan_asal'],
            'kabupaten_asal' => $validateData['kabupaten_asal'],
            'provinsi_asal' => $validateData['provinsi_asal'],
            'kode_pos_asal' => $validateData['kode_pos_asal'],
            'telepon_asal' => $validateData['telepon_asal'],
            'alasan_pindah' => $validateData['alasan_pindah'],
            'alasan_lain',
            $request->alasan_lain,
            'alamat_tujuan_pindah' => $validateData['alamat_tujuan_pindah'],
            'rt_pindah' => $validateData['rt_pindah'],
            'rw_pindah' => $validateData['rw_pindah'],
            'desa_pindah' => $validateData['desa_pindah'],
            'kecamatan_pindah' => $validateData['kecamatan_pindah'],
            'kabupaten_pindah' => $validateData['kabupaten_pindah'],
            'provinsi_pindah' => $validateData['provinsi_pindah'],
            'kode_pos_pindah' => $validateData['kode_pos_pindah'],
            'telepon_pindah' => $validateData['telepon_pindah'],
            'klasifikasi_pindah' => $validateData['klasifikasi_pindah'],
            'jenis_kepindahan' => $validateData['jenis_kepindahan'],
            'status_kk_pindah' => $validateData['status_kk_pindah'],
            'status_kk_tidak_pindah' => $validateData['status_kk_tidak_pindah'],
            'rencana_tanggal_pindah' => $validateData['rencana_tanggal_pindah'],
            'jumlah_keluarga_pindah' => $validateData['jumlah_keluarga_pindah'],
            'nama_pindah' => $nama_pindahan,
            'nik_pindah' => $nik_pindahan,
            'shdck_pindah' => $shdck_pindahan,
            'no_kk_tujuan' => $validateData['no_kk_tujuan'],
            'nama_kepala_keluarga_tujuan' => $validateData['nama_kepala_keluarga_tujuan'],
            'nik_kepala_keluarga_tujuan' => $validateData['nik_kepala_keluarga_tujuan'],
            'status_kk_tujuan_yang_tidak_pindah' => $validateData['status_kk_tujuan_yang_tidak_pindah'],
            'tanggal_kedatangan' => $validateData['tanggal_kedatangan'],
            'alamat_rumah_tujuan' => $validateData['alamat_rumah_tujuan'],
            'rt_tujuan' => $validateData['rt_tujuan'],
            'rw_tujuan' => $validateData['rw_tujuan'],
            'desa_tujuan' => $validateData['desa_tujuan'],
            'kecamatan_tujuan' => $validateData['kecamatan_tujuan'],
            'kabupaten_tujuan' => $validateData['kabupaten_tujuan'],
            'provinsi_tujuan' => $validateData['provinsi_tujuan'],
            'jumlah_keluarga_pindah_tujuan' => $validateData['jumlah_keluarga_pindah_tujuan'],
            'nama_tujuan' => $nama_tujuan,
            'nik_tujuan' => $nik_tujuan,
            'shdck_tujuan' => $shdck_tujuan,
            'foto_ktp' => $ktp,
            'foto_kk' => $kk,
            'foto_surat_pengantar' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKP',
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Pindah Berhasil');
    }

    public function createSKPOT(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap_orang_tua' => 'required',
            'jenis_kelamin_orang_tua' => 'required',
            'tempat_lahir_orang_tua' => 'required',
            'tanggal_lahir_orang_tua' => 'required',
            'agama_orang_tua' => 'required',
            'pekerjaan_orang_tua' => 'required',
            'alamat_orang_tua' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'penghasilan_orang_tua' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKP');
        $kk = $request->kk->store('Surat/SKP');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKP');

        SuratKeteranganPenghasilan::create([
            'user_id' => auth()->user()->id,
            'nama_lengkap_orang_tua' => $validateData['nama_lengkap_orang_tua'],
            'jenis_kelamin_orang_tua' => $validateData['jenis_kelamin_orang_tua'],
            'tempat_lahir_orang_tua' => $validateData['tempat_lahir_orang_tua'],
            'tanggal_lahir_orang_tua' => $validateData['tanggal_lahir_orang_tua'],
            'agama_orang_tua' => $validateData['agama_orang_tua'],
            'pekerjaan_orang_tua' => $validateData['pekerjaan_orang_tua'],
            'alamat_orang_tua' => $validateData['alamat_orang_tua'],
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'pekerjaan' => $validateData['pekerjaan'],
            'agama' => $validateData['agama'],
            'alamat' => $validateData['alamat'],
            'penghasilan_orang_tua' => $validateData['penghasilan_orang_tua'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKPOT',
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Penghasilan Orang Tua Berhasil');
    }

    public function createSKBM(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKBM');
        $kk = $request->kk->store('Surat/SKBM');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKBM');

        SuratKeteranganBelumMenikah::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'pekerjaan' => $validateData['pekerjaan'],
            'agama' => $validateData['agama'],
            'alamat' => $validateData['alamat'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKBM',
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Belum Menikah Berhasil');
    }

    public function createSKKL(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'anak_ke' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKKL');
        $kk = $request->kk->store('Surat/SKKL');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKKL');

        SuratKeteranganKelahiran::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'pekerjaan' => $validateData['pekerjaan'],
            'agama' => $validateData['agama'],
            'alamat' => $validateData['alamat'],
            'nama_ayah' => $validateData['nama_ayah'],
            'nama_ibu' => $validateData['nama_ibu'],
            'anak_ke' => $validateData['anak_ke'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKKL',
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Kelahiran Berhasil');
    }

    public function createSKPSKCK(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'surat_pengantar_rt' => 'required',
        ]);

        $ktp = $request->ktp->store('Surat/SKPSKCK');
        $kk = $request->kk->store('Surat/SKPSKCK');
        $pengantar = $request->surat_pengantar_rt->store('Surat/SKPSKCK');

        SuratPengantarSKCK::create([
            'user_id' => auth()->user()->id,
            'nama' => $validateData['nama'],
            'tempat_lahir' => $validateData['tempat_lahir'],
            'tanggal_lahir' => $validateData['tanggal_lahir'],
            'status_perkawinan' => $validateData['status_perkawinan'],
            'jenis_kelamin' => $validateData['jenis_kelamin'],
            'pekerjaan' => $validateData['pekerjaan'],
            'agama' => $validateData['agama'],
            'alamat' => $validateData['alamat'],
            'ktp' => $ktp,
            'kk' => $kk,
            'surat_pengantar_rt' => $pengantar,
            'status' => 'Perlu Tindakan',
            'jenis' => 'SKPSKCK',
        ]);

        return redirect('layanan-pengajuan-dokumen')->with('success', 'Buat Surat Keterangan Pengantar SKCK Berhasil');
    }

    public function statusPermohonanView()
    {
        $sk_domisili = SuratKeteranganDomisili::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_kematian = SuratKeteranganKematian::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk = SuratKeterangan::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_belum_menikah = SuratKeteranganBelumMenikah::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_bersih_diri = SuratKeteranganBersihDiri::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_domisili_usaha = SuratKeteranganDomisiliUsaha::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_kelahiran = SuratKeteranganKelahiran::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_penghasilan = SuratKeteranganPenghasilan::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_pindah = SuratKeteranganPindah::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_sudah_menikah = SuratKeteranganSudahMenikah::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_tidak_mampu = SuratKeteranganTidakMampu::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_usaha = SuratKeteranganUsaha::where('user_id', auth()->user()->id)->with(['User'])->get();
        $sk_pengantar_skck = SuratPengantarSKCK::where('user_id', auth()->user()->id)->with(['User'])->get();

        $data = collect([$sk_domisili, $sk_kematian, $sk, $sk_belum_menikah, $sk_bersih_diri, $sk_domisili_usaha, $sk_kelahiran, $sk_penghasilan, $sk_pindah, $sk_sudah_menikah, $sk_tidak_mampu, $sk_usaha, $sk_pengantar_skck])
            ->reduce(function ($carry, $item) {
                return $carry->concat($item);
            }, collect());

        $page = request()->get('page', 1);
        $perPage = 5;
        $paginatedData = new LengthAwarePaginator(
            $data->forPage($page, $perPage), // Extract items for the current page
            $data->count(),                  // Total items
            $perPage,                        // Items per page
            $page,                           // Current page
            ['path' => request()->url()]     // Path for pagination links
        );
        return view('pages/user/layanan/status-permohonan', compact('paginatedData'));
    }
}
