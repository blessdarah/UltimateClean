<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog()
    {
        $searchQuery = request()->query('search');
        $searchResult = Post::whereTitle('title', "%{$searchQuery}%")
            ->orWhere('summary', 'like', "%{$searchQuery}%")
            ->where('is_published')
            ->pluck('title')->get();

        return view('pages.blog.index')->with([
            "posts" => Post::published()->paginate(4),
            "search_results" => $searchResult
        ]);
    }
}
