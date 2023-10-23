<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact');
    }
    public function store(Request $request): View
    {
        // $data = $request->validate()
        return to_route('pages.contact');
    }
}
