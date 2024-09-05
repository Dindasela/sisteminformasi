<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluarDomisili;
use Illuminate\Http\Request;

class VerifikasiSuksesController extends Controller
{
    public function show(Request $request)
    {
        $jenis = $request->query('jenis');
        $id = $request->query('id');

        if($jenis == 'SKD'){
            $data = SuratKeluarDomisili::where('surat_keterangan_domisili_id', $id)->first();
            return view('pages.user.layanan.verifikasi-sukses', compact('data'));
        }
    }
}