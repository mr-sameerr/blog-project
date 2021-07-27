<?php

use App\Post;
use App\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $comments = factory(Comment::class, 30)->make()->each(function( $comment) use ($posts){
            $comment->post_id = $posts->random()->id;
            $comment->save();
        });
    }
}
