<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pages.admin.informasi.daftar-pengumuman', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrfail($id);
        return view('pages.admin.informasi.edit-pengumuman', compact('pengumuman'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'status' => 'required',
            'description' => 'required',
            'date' => 'required',
            'place' => 'required'
        ]);

        $file = $validateData['image'];
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $upload = Storage::disk('public')->put('pengumuman/' . $filename, file_get_contents($file));

        if (!$upload) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar');
        }

        $file_path = 'pengumuman/' . $filename;

        $pengumuman = new Pengumuman();
        $pengumuman->title = $validateData['title'];
        $pengumuman->image = $file_path;
        $pengumuman->status = $validateData['status'];
        $pengumuman->description = $validateData['description'];
        $pengumuman->date = $validateData['date'];
        $pengumuman->place = $validateData['place'];
        $save = $pengumuman->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menambah data');
        }

        return redirect()->route('pengumuman.index');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
            'status' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'place' => 'required'
        ]);

        $pengumuman = Pengumuman::find($id);

        if (!$pengumuman) {
            return redirect()->back()->with('error', 'Pengumuman not found');
        }

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($pengumuman->image)) {
                Storage::disk('public')->delete($pengumuman->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $upload = Storage::disk('public')->put('pengumuman/' . $filename, file_get_contents($file));

            if (!$upload) {
                return redirect()->back()->with('error', 'Gagal mengunggah gambar');
            }

            $pengumuman->image = 'pengumuman/' . $filename;
        }

        $pengumuman->title = $validateData['title'];
        $pengumuman->status = $validateData['status'];
        $pengumuman->description = $validateData['description'];
        $pengumuman->date = $validateData['date'];
        $pengumuman->place = $validateData['place'];
        $save = $pengumuman->save();

        if (!$save) {
            return redirect()->back()->with('error', 'Gagal memperbarui data');
        }

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if (Storage::disk('public')->exists($pengumuman->image)) {
            Storage::disk('public')->delete($pengumuman->image);
        }

        $delete = $pengumuman->delete();

        if (!$delete) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil dihapus');
    }
}
