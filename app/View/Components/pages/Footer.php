<?php

namespace App\View\Components\pages;

use App\Models\Service;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pages.footer')->with([
            "services" => Service::latest()->take(4)->get()
        ]);
    }
}
