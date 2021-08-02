<?php

use App\Post;
use App\Tag;

use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all()->count();

        Post::all()->each(function(Post $post) {
            $take = random_int(0, 6);
            $tags = Tag::inRandomOrder()->take($take)->get()->pluck('id');
            $post->tags()->sync($tags);

        });
    }
}
