<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'body'];

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
