<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $tagId){

        $posts = Tag::find( $tagId)->posts;

        return view('posts.index', compact('posts'));
    }

}
