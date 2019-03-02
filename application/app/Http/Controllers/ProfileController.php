<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::user()->id;
        $active_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '1')->get();
        $cancel_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '0')->get();
        $complete_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '2')->get();
        return view('user.profile',['active_posts'=>$active_posts,'cancel_posts'=>$cancel_posts, 'complete_posts'=>$complete_posts]);
    }
}
