<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    
    public function image(){
        return $this->morphTo();
    }

    public function url(){
        return Storage::url($this->path);
    }
}
