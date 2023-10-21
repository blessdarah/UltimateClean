<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index')->with([
            'services' => Service::published()->get()
        ]);
    }

    public function show(string $slug)
    {
        return view('pages.services.show')->with([
            "service" => Service::where('slug', $slug)->firstOrDefault()
        ]);
    }
}
