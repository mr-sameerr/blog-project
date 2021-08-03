<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $table = 'post_images';

    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function url(){
        return Storage::url($this->path);
    }
}
