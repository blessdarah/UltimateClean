<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "image", "nickname", "position", "address", "email", "telephone", "gender", "dob", "about"];
}
