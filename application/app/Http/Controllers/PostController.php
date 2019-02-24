<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    //
    public function searchDonor(Request $request)
    {
        $user_id = Auth::user()->id;
        $post = new Post();
        $post->user_id = $user_id;
        $post->blood_group = $request->blood_group;
        $post->city = $request->city;
        $post->hospital = '';
        $post->time = '';
        $post->quantity = '';
        $post->status = 0;
        $post->save();

        $search_user = User::where('blood_group','=',$request->blood_group)
        ->where('city','=',$request->city)->get();
        /*$this->searchUser($request);*/

        return view('search-donor',['search_user'=>$search_user]);
        //return redirect ('home')->with('message','Your post save successfully');
    }

    public function sendRequest()
    {
        $user_blood_group = Auth::user()->blood_group;
        $posts = Post::where('blood_group','=',$user_blood_group)->get();
        return view('user.send-request',['posts'=>$posts]);

    }

    public function requestDonor($id)
    {

    }

}
