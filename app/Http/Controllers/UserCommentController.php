<?php

namespace App\Http\Controllers;

use App\
use Illuminate\Http\Request;

class UserCommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['store']);
    }

    public function store(User $user, Request $request){

    }
}
