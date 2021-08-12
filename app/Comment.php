<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function commentable(){
        return $this->morphTo();
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
