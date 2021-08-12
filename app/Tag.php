<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // public function posts(){
    //     return $this->belongsToMany(Post::class);
    // }

    // public function posts(){
    //     return $this->morphedByMany(Post::class, 'taggable');
    // }

    // public function comments(){
    //     return $this->morphedByMany(Comment::class, 'taggable');
    // }
}
