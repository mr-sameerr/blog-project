<?php

use App\User;
use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        $posts = factory(Post::class, 20)->make()->each(function($post) use($users){
            $post->user_id = $users->random()->id;
            $post->save();
        });
    }
}
