<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('pages.admin.galeri.list-galeri', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.admin.galeri.edit-foto-video', compact('gallery'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'link' => 'nullable',
            'image' => 'required|image',
        ]);

        $image = $validateData['image'];
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = Storage::disk('public')->put('gallery/' . $filename, file_get_contents($image));

        if (!$path) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar');
        }

        $file_path = 'gallery/' . $filename;

        $gallery = new Gallery();
        $gallery->title = $validateData['title'];
        $gallery->category = $validateData['category'];
        $gallery->date = now()->format('Y-m-d');
        $gallery->description = $validateData['description'];
        $gallery->link = $validateData['link'];
        $gallery->status = 'Tayang';
        $gallery->image = $file_path;
        $save = $gallery->save();
        if (!$save) {
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil diunggah');
    }

    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'link' => 'nullable',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $gallery = Gallery::findOrFail($id);

        $gallery->title = $validateData['title'];
        $gallery->link = $validateData['link'];
        $gallery->description = $validateData['description'];

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            // Upload gambar baru
            $image = $validateData['image'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = Storage::disk('public')->put('gallery/' . $filename, file_get_contents($image));

            if (!$path) {
                return redirect()->back()->with('error', 'Gagal mengunggah gambar');
            }

            $gallery->image = $path;
        }

        $gallery->save();

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if (Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $delete = $gallery->delete();

        if (!$delete) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->route('galeri.index')->with('success', 'Data berhasil dihapus');
    }
}
