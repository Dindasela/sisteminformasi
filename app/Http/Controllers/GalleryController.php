<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('pages.admin.galeri.list-galeri', compact('gallery'));
    }
}
