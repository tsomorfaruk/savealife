<?php

namespace App\Http\Controllers;

use App\PostDonor;
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
        $post->status = 1;
        $post->save();

        $posts = Post::where('user_id', '=', $user_id)->get();
        $search_donor = User::where('blood_group', '=', $request->blood_group)
            ->where('city', '=', $request->city)
            ->where('id', '!=', $user_id)->get();
        return view('search-donor', ['search_donor' => $search_donor, 'posts' => $posts]);
    }

    public function sendRequest()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', '=', $user_id)->get();
        if ($posts == NULL) {
            return view('user.send-request');
        } else{
            foreach ($posts as $post) {
                $post_id = $post->id;
                $postdonors = PostDonor::where('post_id', '=', $post_id)->get();

            }

            foreach ($postdonors as $postdonor) {
                $donor_id = $postdonor->user_id;
                $postdonor_id = $postdonor->id;
                $donor = User::where('id', '=', $donor_id)->get();
                $donor_list[] = $donor;
            }
            //dd($donor_list);
            return view('user.send-request', ['donor_list' => $donor_list]);
        }



    }

    public function requestDonor(Request $request)
    {
        $id = $request->input('id');
        $post_id = $request->input('post_id');
        $postdonor = new PostDonor();
        $postdonor->post_id = $post_id;
        $postdonor->user_id = $id;
        $postdonor->status = 1;
        $postdonor->save();

        echo json_encode($post_id);
    }

}
