<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        //$this->middleware('auth')->except(['about', 'contact']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        // /dd(Redis::set('name', 'Taylor'));
        $posts = Post::orderBy('id', 'DESC')->take(6)->get();

        $mostCommented = Post::mostCommented()->take(6)->get();
        $activeAuthors = User::activeAuthors()->take(6)->get();
        // dd($activeAuthors);
        return view('index', compact('posts', 'mostCommented', 'activeAuthors'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
