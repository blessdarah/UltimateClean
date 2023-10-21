<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\View\View;

class PartnersController extends Controller
{
    public function index(): View
    {
        return view('pages.partners.index')->with([
            'partners' => Partner::all()
        ]);
    }
}
