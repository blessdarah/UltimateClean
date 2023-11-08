<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('welcome')->with([
            'services' => Service::take(6)->get(),
            'posts' => Post::latest()->take(3)->get(),
            'testimonials' => Testimonial::latest()->take(4)->get(),
            'faqs' => Faq::latest()->get(),
            'partners' => Partner::latest()->get(),
            'banners' => Banner::published()->get()
        ]);
    }
}
