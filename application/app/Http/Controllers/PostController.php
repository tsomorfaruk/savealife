<?php

namespace App\Http\Controllers;

use App\PostDonor;
use App\User;
use function foo\func;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function searchDonor(Request $request)
    {
        $user_id = Auth::user()->id;

        $posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '1')->get();
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
            ->with(['post_user','donors'=>function($q){$q->with(['user']);}])->where('status', 1)->get();


        return view('user.send-request', ['posts' => $posts]);
    }

    public function requestDonor(Request $request)
    {
        $id = $request->input('id');
        $post_id = $request->input('post_id');
        $postdonor = new PostDonor();
        $postdonor->post_id = $post_id;
        $postdonor->donor_id = $id;
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
        $postdonor_id = $request->input('id');
        $postdonor = PostDonor::find($postdonor_id);
        $postdonor->status = 2;
        $postdonor->save();
        echo json_encode($postdonor_id);
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
        return redirect('/my-profile')->with('post_message', 'Your Request has been canceled.');
    }

    public function completePost(Request $request)
    {
        $post_id = $request->post_id;
        $post = Post::find($post_id);
        $post->status = 2;
        $post->save();
        return redirect('/my-profile')->with('post_message', 'Your Request has been completed.');
    }

    public function bloodPost()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', '!=', $user_id)
            ->where('status', '=', '1')
            ->with(['post_user', 'donors'])->get();
        return view('blood-post', ['posts' => $posts]);
    }

    public function receiveRequest()
    {
        $user_id = Auth::user()->id;
        $postdonors = PostDonor::whereHas('post')
            ->with(['post'=>function($q){$q->with(['post_user']);}])
            ->where('donor_id', '=', $user_id)->get();
        /*$posts = Post::whereHas('donors')
            ->with(['post_user','donors'=>function($q){$q->with(['user']);}])->where('status', '=', '1')->get();*/

        return view('user.receive-request', ['postdonors' => $postdonors]);
    }

    public function donorRequest(Request $request)
    {
        $donor_id = $request->input('donor_id');
        $post_id = $request->input('post_id');
            $postdonor = PostDonor::where('post_id',$post_id)->where('donor_id', $donor_id)->get();
            $postdonor->donor_id = $donor_id;
            $postdonor->post_id = $post_id;
            $postdonor->status = 2;
            $postdonor->save();
            echo json_encode($donor_id);
    }

}
