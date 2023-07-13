<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $casts = [
        "due_date" => "datetime"
    ];

    protected $fillable = ['title', 'code', 'is_paid', 'due_date'];
}
