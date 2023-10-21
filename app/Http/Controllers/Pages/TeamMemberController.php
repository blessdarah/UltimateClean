<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    public function index(): View
    {
        return view('pages.members.index')->with([
            'services' => TeamMember::all()
        ]);
    }
}
