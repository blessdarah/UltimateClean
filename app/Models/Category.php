<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function categorable()
    {
        return $this->morphTo();
    }

    public function services(): MorphMany
    {
        return $this->morphOne(Service::class, "categorable");
    }

    // public function posts(): MorphMany
    // {
    //     return $this->morphMany(Post::class, "categorable");
    // }
}
