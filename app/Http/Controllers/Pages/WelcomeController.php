<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome')->with([
            'services' => Service::take(6)->get(),
            'posts' => Post::latest()->take(3)->get(),
        ]);
    }
}
