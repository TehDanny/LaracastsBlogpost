<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);

        // to get the name of the poster: $post->user->name
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
