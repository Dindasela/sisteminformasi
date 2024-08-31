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
        return view('pages.admin.informasi.daftar-pengumuman',compact('pengumuman'));
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
        if(!$save){
            return redirect()->back()->with('error','Gagal menambah data');
        }
    }
}