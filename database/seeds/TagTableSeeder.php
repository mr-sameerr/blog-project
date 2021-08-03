<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['science', 'food', 'auto', 'vlog', 'travelling', 'finance', 'infrastructure']);

        $tags->each(function($tagName){
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        });
    }
}
