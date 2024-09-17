<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $search = request()->query('search');
        $data = Laporan::where(function ($query) use ($search) {
            if ($search) {
                $query->where('nama', 'LIKE', '%' . $search . '%')->orWhere('jenis', 'LIKE', '%' . $search . '%');
            }
        })->paginate(10);
        return view('pages.admin.pelaporan.laporan-masuk', compact('data'));
    }

    public function create()
    {
        if (auth()->check()) {
            return view('pages/user/layanan/form-pelaporan');
        }
        return redirect()->route('layanan-pelaporan.auth');
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

        $dataArray = $laporan->toArray();
        $directoryPath = public_path('storage/laporan/pdf/');

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        $pdf = Pdf::loadView('surat.pengaduan', ['dataArray' => $dataArray]);

        $pdf->save($directoryPath . $laporan->id . '.pdf');

        return redirect()->route('layanan-form-pelaporan');
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

    public function downloadPDF($id)
    {
        $laporan = Laporan::find($id);
        $file = Storage::disk('public')->get('laporan/pdf/' . $laporan->id . '.pdf');
        return response($file, 200)->header('Content-Type', 'application/pdf');
    }
}
