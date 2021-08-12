<?php

use App\User;
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
        $users = User::all();

        $comments = factory(Comment::class, 40)->make()->each(function( $comment) use ($posts, $users){
            $comment->commentable_type = 'App\Post';
            $comment->commentable_id   = $posts->random()->id;
            $comment->user_id          = $users->random()->id;
            $comment->save();
        });

        $comments = factory(Comment::class, 40)->make()->each(function( $comment) use($users){
            $comment->commentable_type  = 'App\User';
            $comment->commentable_id    = $users->random()->id;
            $comment->user_id           = $users->random()->id;   
            $comment->save();
        });
    }
}
