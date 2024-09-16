<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index()
    {
        $datas = SuratMasuk::all();
        return view('pages.admin.manajemen-surat.surat-masuk.surat-masuk', compact('datas'));
    }

    public function edit($id)
    {
        $data = SuratMasuk::findOrFail($id);
        return view('pages.admin.manajemen-surat.surat-masuk.lihat-surat-masuk', compact('data'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'pengirim' => 'required',
            'jenis_surat' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_terima' => 'required',
            'file' => 'required',
        ]);

        $file = $validateData['file'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('surat-masuk/' . $filename, file_get_contents($file));

        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah file');
        }

        $file_path = 'surat-masuk/' . $filename;

        $data = new SuratMasuk();
        $data->nomor_surat = $validateData['nomor_surat'];
        $data->perihal = $validateData['perihal'];
        $data->pengirim = $validateData['pengirim'];
        $data->jenis_surat = $validateData['jenis_surat'];
        $data->tanggal_surat = $validateData['tanggal_surat'];
        $data->tanggal_terima = $validateData['tanggal_terima'];
        $data->file = $file_path;
        $save = $data->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }
        return redirect()->route('surat-masuk.index');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nomor_surat' => 'required',
            'perihal' => 'required',
            'jenis_surat' => 'required',
            'pengirim' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_terima' => 'required',
            'file' => 'nullable',
        ]);

        $data = SuratMasuk::findOrFail($id);
        
        if($request->hasFile('file')) {
            if (Storage::disk('public')->exists($data->file)) {
                Storage::disk('public')->delete($data->file);
            }

            $file = $validateData['file'];
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $upload = Storage::disk('public')->put('surat-masuk/' . $filename, file_get_contents($file));

            if (!$upload) {
                return redirect()->back()->with('error', 'Gagal mengunggah file');
            }

            $file_path = 'surat-masuk/' . $filename;
            $data->file = $file_path;
        }

        $data->nomor_surat = $validateData['nomor_surat'];
        $data->perihal = $validateData['perihal'];
        $data->jenis_surat = $validateData['jenis_surat'];
        $data->pengirim = $validateData['pengirim'];
        $data->tanggal_surat = $validateData['tanggal_surat'];
        $data->tanggal_terima = $validateData['tanggal_terima'];
        $save = $data->save();

        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }

        return redirect()->route('surat-masuk.index');
    }

    public function destroy($id)
    {
        $data = SuratMasuk::findOrFail($id);
        if (Storage::disk('public')->exists($data->file)) {
            Storage::disk('public')->delete($data->file);
        }
        $delete = $data->delete();
        if (!$delete) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->route('surat-masuk.index');
    }
}