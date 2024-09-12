<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluarBersihDiri;
use App\Models\SuratKeluarDomisili;
use App\Models\SuratKeluarDomisiliUsaha;
use App\Models\SuratKeluarKematian;
use App\Models\SuratKeluarKeterangan;
use App\Models\SuratKeluarSudahMenikah;
use App\Models\SuratKeluarTidakMampu;
use App\Models\SuratKeterangan;
use App\Models\SuratKeteranganBersihDiri;
use App\Models\SuratKeteranganDomisili;
use App\Models\SuratKeteranganDomisiliUsaha;
use App\Models\SuratKeteranganKematian;
use App\Models\SuratKeteranganSudahMenikah;
use App\Models\SuratKeteranganTidakMampu;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Svg\Tag\Rect;

class SuratKeluarController extends Controller
{
    public function generateQR(Request $request)
    {
        $jenis = session('jenis_surat');
        $id = session('id_surat');

        if ($jenis == 'SKD') {
            $datas = SuratKeteranganDomisili::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarDomisili::create([
                'surat_keterangan_domisili_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKD&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKD/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKD/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKD/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKD/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-domisili', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SKDU') {
            $datas = SuratKeteranganDomisiliUsaha::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarDomisiliUsaha::create([
                'surat_keterangan_domisili_usaha_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKDU&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKDU/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKDU/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKDU/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKDU/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-domisili-tempat', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SKK') {
            $datas = SuratKeteranganKematian::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarKematian::create([
                'surat_keterangan_kematian_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKK&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKK/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKK/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKK/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKK/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-kematian', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SKTM') {
            $datas = SuratKeteranganTidakMampu::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarTidakMampu::create([
                'surat_keterangan_tidak_mampu_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKTM&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKTM/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKTM/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKTM/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKTM/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-tidak-mampu', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SK') {
            $datas = SuratKeterangan::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarKeterangan::create([
                'surat_keterangan_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SK&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SK/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SK/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SK/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SK/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SKSM') {
            $datas = SuratKeteranganSudahMenikah::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarSudahMenikah::create([
                'surat_keterangan_sudah_menikah_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKSM&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKSM/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKSM/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKSM/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKSM/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-sudah-menikah', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }

        if ($jenis == 'SKBD') {
            $datas = SuratKeteranganBersihDiri::find($id);

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarBersihDiri::create([
                'surat_keterangan_bersih_diri_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://63b2-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKBD&id_surat={$id}");

            $filename = $id . '.png';

            $save = Storage::disk('public')->put('Surat/SKBD/qr/' . $filename, $qr);
            if ($save) {
                if (Storage::disk('public')->exists('Surat/SKBD/pdf/' . $id . '.pdf')) {
                    Storage::disk('public')->delete('Surat/SKBD/pdf/' . $id . '.pdf');
                }
                $dataArray = $datas->toArray();
                $directoryPath = public_path('storage/Surat/SKBD/pdf/');

                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                $pdf = Pdf::loadView('surat.surat-keterangan-bersih-diri', ['dataArray' => $dataArray]);

                $pdf->save($directoryPath . $datas->id . '.pdf');

                return redirect()->route('manajemen-surat.index');
            }
        }
    }


    public function store(Request $request)
    {
        $jenis = session('jenis_surat');
        $id = session('id_surat');

        if ($jenis == 'SKD') {

            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarDomisili::create([
                'surat_keterangan_domisili_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            return redirect()->route('manajemen-surat.index');
        }

        if ($jenis == 'SKDU') {
            $validateData = $request->validate([
                'jenis_dokumen' => 'required',
                'nomor_surat' => 'required',
                'nama_pemohon' => 'required',
                'nik' => 'required',
                'pembuat_pemohonan' => 'required',
                'tanggal_diterima' => 'required',
                'file' => 'required'
            ]);

            SuratKeluarDomisili::create([
                'surat_keterangan_domisili_usaha_id' => $id,
                'jenis_dokumen' => $validateData['jenis_dokumen'],
                'nomor_surat' => $validateData['nomor_surat'],
                'nama_pemohon' => $validateData['nama_pemohon'],
                'nik' => $validateData['nik'],
                'pembuat_pemohonan' => $validateData['pembuat_pemohonan'],
                'tanggal_diterima' => $validateData['tanggal_diterima'],
                'file' => $validateData['file'],
            ]);

            return redirect()->route('manajemen-surat.index');
        }
    }
}
