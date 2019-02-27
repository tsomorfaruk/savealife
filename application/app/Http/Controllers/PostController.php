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

        $posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '1')->get();
        //dd(count($posts));
        if (count($posts) == 0) {
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
        } else {
            return redirect('home')->with('message', 'Already one post created. Please cancel old post and newly search.');
        }


    }

    public function sendRequest()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', '=', $user_id)
            ->whereHas('donors')
            ->with(['post_user','donors'=>function($q){$q->with(['user']);}])->where('status', '=', '1')->get();


        return view('user.send-request', ['posts' => $posts]);

        /*dd($posts);
        if (count($posts) == 0) {
            return redirect('home')->with('message', 'You have no send request.');
        } else {
            foreach ($posts as $post) {
                $post_id = $post->id;
                $postdonors = PostDonor::where('post_id', '=', $post_id)->get();
            }
            if (count($postdonors) != 0) {
                foreach ($postdonors as $postdonor) {
                    $donor_id = $postdonor->user_id;
                    $donor = User::find($donor_id)->postdonor;
                    $donor_list[] = $donor;
                }
                dd($donor_list);
                return view('user.send-request', ['donor_list' => $donor_list]);
            } else {
                return redirect('home')->with('message', 'You have no send request.');
            }

        }*/
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

    public function cancelRequest(Request $request)
    {
        $id = $request->input('id');
        $postdonor = PostDonor::find($id);
        $postdonor->status = 0;
        $postdonor->save();
        echo json_encode($id);
    }

    public function acceptRequest(Request $request)
    {
        $donor_id = $request->input('donor_id');
        $post_id = $request->input('post_id');
        $users = User::find($donor_id)->postdonor;
        foreach ($users as $user) {
            if (count($user) == 0) {
                $postdonor = new PostDonor();
                $postdonor->user_id = $donor_id;
                $postdonor->status = 2;
                $postdonor->post_id = $post_id;
                $postdonor->save();
                echo json_encode($donor_id);
            }
            if ($user->postdonor->status == 2) {
                return redirect('home')->with('message', 'Already you have an accepted request.');
            }
        }

        /*dd($user->postdonor->status);
        $user->postdonor->status = 2;
        $user->postdonor->save();*/
    }

    public function completeRequest(Request $request)
    {
        $id = $request->input('id');
        $postdonor = PostDonor::find($id);
        $postdonor->status = 3;
        $postdonor->save();
        echo json_encode($id);
    }

    public function cancelPost(Request $request)
    {
        $post_id = $request->post_id;
        $post = Post::find($post_id);
        $post->status = 0;
        $post->save();
        return redirect('/my-profile')->with('post_message', 'Your post has been canceled.');
    }

    public function completePost(Request $request)
    {
        $post_id = $request->post_id;
        $post = Post::find($post_id);
        $post->status = 2;
        $post->save();
        return redirect('/my-profile')->with('post_message', 'Your post has been completed.');
    }

    public function bloodPost()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('status', '=', '1')
            ->where('user_id', '!=', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('blood-post', ['posts' => $posts]);
    }

}
