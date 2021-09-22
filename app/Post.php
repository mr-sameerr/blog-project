<?php

namespace App;

use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //use SoftDeletes;
    protected $guarded = [];
    use Taggable;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function scopeMostCommented(Builder $query){
        return $query->withCount('comments')->orderBy('comments_count', 'DESC');
    }

    // public function tags(){
    //     return $this->belongsToMany(Tag::class);
    // }

    

    // public function tags(){
    //     return $this->morphToMany(Tag::class, 'taggable');
    // }

}
