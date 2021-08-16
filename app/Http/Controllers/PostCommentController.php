<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Mail\CommentNotifier;
use App\Http\Requests\AddComment;
use App\Http\Requests\GeneratePost;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentNotifierOtherUser;
use App\Jobs\ActivityOnPostNotification;
use Illuminate\Support\Facades\Storage;

class PostCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['store']);
    }

    public function store(AddComment $request, Post $post){


        //dd(Auth::user()->image->url());
        $data   = $request->validated();
        $comment= $post->comments()->save(
                    Comment::make(['description'   => $request->comment])
                    );
        
        $delay  = now()->addMinutes(1);

        Mail::to($post->user) 
        ->queue(  new CommentNotifier($comment) );

        ActivityOnPostNotification::dispatch($comment);

        $request->session()->flash('success', 'Post has been created.');
        return redirect()->route('posts.show', $post->id);
    }
}