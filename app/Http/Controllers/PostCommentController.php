<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\AddComment;
use App\Http\Requests\GeneratePost;
use Illuminate\Support\Facades\Storage;

class PostCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['store']);
    }

    public function store(AddComment $request, Post $post){

        $data   = $request->validated();
        $post->comments()->save(
                Comment::make(['description'   => $request->commentPost])
                );

        $request->session()->flash('success', 'Post has been created.');
        return redirect()->route('posts.show', $post->id);
    }
}