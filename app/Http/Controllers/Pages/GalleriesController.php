<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleriesController extends Controller
{
    public function index(): View
    {
        return view('pages.gallery.index')->with([
            'albums' => GalleryAlbum::paginate(4)
        ]);
    }

    public function show(GalleryAlbum $galleryAlbum): View
    {
        return view('pages.gallery.show')->with('album', $galleryAlbum);
    }
}
