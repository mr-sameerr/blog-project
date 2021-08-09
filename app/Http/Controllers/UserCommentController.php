<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\AddComment;

class UserCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['store']);
    }

    public function store(User $user, AddComment $request){

        $data = $request->validated();

        $user->commentsOnUser()->save(
            Comment::make([
                'description'   =>  $request->comment
            ])
        );

        $request->session()->flash('success', 'Post has been created.');
        return redirect()->route('user.show', $user->id);
    }
}
