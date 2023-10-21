<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UpdateController extends Controller
{
    public function index(): View
    {
        return view('pages.updates.index')->with([
            'updates' => Update::all()
        ]);
    }

    public function show(string $slug): View
    {
        return view('pages.updates.show')->with([
            'update' => Update::where('slug', $slug)->firstOrFail()
        ]);
    }
}
