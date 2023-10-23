<?php

namespace App\View\Components\pages;

use Illuminate\View\Component;

class PageHeader extends Component
{
    // public string $currentPage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $currentPage, public $title = null)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pages.page-header');
    }
}
