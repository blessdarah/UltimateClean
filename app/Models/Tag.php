<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function posts(): MorphTo
    {
        return $this->morphedByMany(Post::class, "taggable");
    }

    public function services(): MorphTo
    {
        return $this->morphedByMany(Service::class, "taggable");
    }
}
