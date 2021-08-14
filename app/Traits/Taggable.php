<?php

namespace App\Traits;

use App\Tag;

trait taggable{

	public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}