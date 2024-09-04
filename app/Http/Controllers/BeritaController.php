<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('pages.admin.informasi.daftar-berita', compact('berita'));
    }

    public function indexUser()
    {
        $berita = Berita::all();
        return view('pages.user.informasi.berita', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pages.admin.informasi.edit-berita', compact('berita'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'date' => 'required',
            'description' => 'required',
        ]);

        $file = $validateData['image'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('berita/' . $filename, file_get_contents($file));

        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar');
        }

        $file_path = 'berita/' . $filename;

        $berita = new Berita();
        $berita->title = $validateData['title'];
        $berita->image = $file_path;
        $berita->description = $validateData['description'];
        $berita->date = $validateData['date'];
        $berita->status = 'Tayang';
        $save = $berita->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }
        return redirect()->route('berita.index');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'date' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($berita->image)) {
                Storage::disk('public')->delete($berita->image);
            }

            $file = $validateData['image'];
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $upload = Storage::disk('public')->put('berita/' . $filename, file_get_contents($file));

            if (!$upload) {
                return redirect()->back()->with('error', 'Gagal mengunggah gambar');
            }

            $berita->image = 'berita/' . $filename;
        }

        $berita->title = $validateData['title'];
        $berita->description = $validateData['description'];
        $berita->date = $validateData['date'];
        $berita->status = $validateData['status'];

        $save = $berita->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal memperbarui data');
        }

        return redirect()->route('berita.index');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (Storage::disk('public')->exists($berita->image)) {
            Storage::disk('public')->delete($berita->image);
        }

        $delete = $berita->delete();

        if (!$delete) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->route('berita.index')->with('success', 'Data berhasil dihapus');
    }
}
