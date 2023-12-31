<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'photos', 'published', 'archived'];

    protected $casts = [
        'photos' => 'array'
    ];
}
