<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth')->except(['about', 'contact']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $posts = Post::all();
        //dd($posts);
        return view('index', compact('posts'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
