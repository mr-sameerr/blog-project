<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Request\GeneratePost;
use Illuminate\Support\Facades\Storage;

class PostCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['store']);
    }

    public function store(GeneratePost $request, Post $post){

        $data   = $request->validated();
        dd($data);
        $data['user_id'] = Auth::id();
        $post   = Post::create($data);

        //Check if image exist and if exists then proceed further.
        if($request->hasFile('postThumb')){

            $file = $request->file('postThumb');

            //This will store file in 'post-thumbnails' directory with random name.
            // $path = $file->store('post-thumbnails');
            $path = Storage::disk('public')->putFileAs('post-thumbnails', $file, Auth::id().'_post.'.$file->guessExtension());

            $post->image()
                ->save(
                    Image::make(['path' => $path]) 
                );
        }

        $request->session()->flash('success', 'Post has been created.');
        return redirect()->route('posts.show', $post->id);
    }
}
