<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Comment extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'message',
    // ];
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    // public function post()
    // {
    //     return $this->hasOne(Post::class);
    // }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function tags() : MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
