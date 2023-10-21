<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventsController extends Controller
{
    public function index(): View
    {
        return view('pages.events.index')->with([
            'events' => Event::paginate(6)
        ]);
    }

    public function show(string $slug): View
    {
        return view('pages.events.show')->with([
            'event' => Event::where('slug', $slug)->firstOrFail()
        ]);
    }
}
