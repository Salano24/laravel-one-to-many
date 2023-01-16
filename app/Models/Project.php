<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =['title', 'description', 'slug','cover_image' ];
    public static function createSlug($input)
    {
        return Str::slug($input);
    }
}
