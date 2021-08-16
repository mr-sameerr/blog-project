<?php

namespace App;

use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    use Taggable;

    public function user(){
        return $this->belongsTo(User::class, 'commentable_id');
    }

    public function commentedByUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function commentable(){
        return $this->morphTo();
    }

    // public function tags(){
    //     return $this->morphToMany(Tag::class, 'taggable');
    // }

}
