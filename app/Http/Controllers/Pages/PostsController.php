<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;

// use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $searchQuery = request()->query('search');
        $searchResult = Post::whereTitle('title', "%{$searchQuery}%")
            ->orWhere('summary', 'like', "%{$searchQuery}%")
            ->where('is_published')
            ->pluck('title');

        return view('pages.posts.index')->with([
            "posts" => Post::published()->paginate(4),
            "search_results" => $searchResult
        ]);
    }
    public function show(string $slug)
    {
        return view('pages.posts.show', with(["post" => Post::whereSlug($slug)->first()]));
    }

}
