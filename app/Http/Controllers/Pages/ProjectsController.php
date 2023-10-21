<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function index(): View
    {
        return view('pages.projects.index')->with([
            'projects' => Project::paginate(6)
        ]);
    }

    public function show(string $slug): View
    {
        return view('pages.projects.show')->with([
            'project' => Project::where('slug', $slug)->firstOrFail()
        ]);
    }
}
