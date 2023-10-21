<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\Widget;

class PublishedPostsWidget extends Widget
{
    protected static string $view = 'filament.resources.post-resource.widgets.published-posts-widget';

    public function getViewData(): array
    {
        return [
            "posts" => Post::published()->count()
        ];
    }
}
