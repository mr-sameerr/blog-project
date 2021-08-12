<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Image;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\GeneratePost;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PostController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = Post::withCount('comments')->with('tags')->get();

        $u = Post::query()
                ->with(['commentable' => function (MorphTo $morphTo) {
                    $morphTo->morphWith([
                        User::class => ['posts']
                    ]);
                }])->get();
        dd($u);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneratePost $request){

        $data   = $request->validated();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $post = Post::with(['user', 'comments.user'])->findOrFail( $id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $post = Post::findOrFail( $id);
        $this->authorize('update', $post);
        
        // if(Gate::denies('update-post', $post)){
        //     abort(403, 'Sorry, you can\'t edit the post.');
        // }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $post = Post::findOrFail( $id)
        ->fill(['title' => $request->title, 'content' => $request->description]);

        $this->authorize($post);
        $postImage = $request->file('post_image');
        
        if($request->hasFile('post_image')){
            $path = Storage::disk('public')->putFileAs('post-thumbnails', $postImage, $post->id.'_post.'.$postImage->guessExtension());

            if($post->image){
                Storage::delete($post->image->path);
                $post->image->path = $path;
                $post->image->save();
            }else{
                $post->image()->save(
                    Image::make(['path' => $path])
                );
            }
        }

        $request->session()->flash('success', 'Post has been updated.');
        return redirect()->route('posts.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $post = Post::findOrFail( $id);
        $this->authorize('delete', $post);

        $state = $post->delete();
        $flag  = $state ? 'success' : 'fail';
        $msg   = $flag == 'success' ? 'Post has been deleted.' : 'There is an error.';

        return back()->with($flag, $msg);
    }
}
