<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        return view('pages.admin.pelaporan.laporan-masuk', compact('laporan'));
    }

    public function edit($id)
    {
        $laporan = Laporan::find($id);
        return view('pages.admin.pelaporan.lihat-laporan', compact('laporan'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'file' => 'required',
        ]);

        $file = $validateData['file'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('laporan/' . $filename, file_get_contents($file));

        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah file');
        }

        $file_path = 'laporan/' . $filename;

        $laporan = new Laporan();
        $laporan->user_id = auth()->user()->id;
        $laporan->jenis = $validateData['jenis'];
        $laporan->nama = $validateData['nama'];
        $laporan->deskripsi = $validateData['deskripsi'];
        $laporan->tanggal = $validateData['tanggal'];
        $laporan->lokasi = $validateData['lokasi'];
        $laporan->file = $file_path;
        $laporan->save();

        return redirect()->route('laporan.index');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'file' => 'nullable',
        ]);

        $laporan = Laporan::find($id);
        $laporan->jenis = $validateData['jenis'];
        $laporan->nama = $validateData['nama'];
        $laporan->deskripsi = $validateData['deskripsi'];
        $laporan->tanggal = $validateData['tanggal'];
        $laporan->lokasi = $validateData['lokasi'];

        if ($request->hasFile('file')) {
            $file = $validateData['file'];
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $upload = Storage::disk('public')->put('laporan/' . $filename, file_get_contents($file));

            if (!$upload) {
                return redirect()->back()->with('error', 'Gagal mengunggah file');
            }

            $file_path = 'laporan/' . $filename;
            $laporan->file = $file_path;
        }

        $laporan->save();

        return redirect()->route('laporan.index');
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        if (Storage::disk('public')->exists($laporan->file)) {
            Storage::disk('public')->delete($laporan->file);
        }
        $laporan->delete();

        return redirect()->route('laporan.index');
    }
}