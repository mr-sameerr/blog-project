<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function scopeActiveAuthors(Builder $query){
        return $query->withCount('posts')->orderBy('posts_count', 'DESC');
    }

    public function commentsOnUser(){
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }

    public function scopeOtherCommentedOnPost(Builder $query, Post $post){
        
        return $query->whereHas('comments', function($query) use ($post) {
            return $query->where('commentable_id', '=', $post->id)
                    ->where('commentable_type', '=', Post::class);
        });
    }
}
