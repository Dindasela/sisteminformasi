<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluarDomisili;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Svg\Tag\Rect;

class SuratKeluarController extends Controller
{
    public function generateQR()
    {
        $jenis = session('jenis_surat');
        $id = session('id_surat');

        if ($jenis == 'SKD') {
            $qr = QrCode::size(200)
                ->format('png')
                ->generate("https://4bfa-2404-8000-100b-d702-e5da-46cb-594b-ebe3.ngrok-free.app/layanan-verifikasi-sukses?jenis_surat=SKD&id_surat={$id}");
            
            $filename = 'qr-code.png';

            return response($qr)
                ->header('Content-Type', 'image/png')
                ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
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

            // $qr = $this->generateQR($jenis, $id);
            // dd($qr);

            return redirect()->route('manajemen-surat.index');
        }
    }
}
