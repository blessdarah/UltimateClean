<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "slug", "image", "category_id", "description", "detail", "start_date", "end_date"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
