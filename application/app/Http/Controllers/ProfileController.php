<?php

namespace App\Http\Controllers;

use App\PostDonor;
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
        $send_requests = PostDonor::where('request_by', $user_id)->get();
        $receive_requests = PostDonor::where('request_by', $user_id)
            ->where('donor_id', $user_id)->get();
        $active_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '1')->get();
        $cancel_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '0')->get();
        $complete_posts = Post::where('user_id', '=', $user_id)
            ->where('status', '=', '2')->get();
        return view('user.profile',['active_posts'=>$active_posts,'cancel_posts'=>$cancel_posts, 'complete_posts'=>$complete_posts, 'send_requests'=>$send_requests, 'receive_requests'=>$receive_requests]);
    }

    public function editProfile()
    {
        return view('user.edit-profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'city'=>'required',
            'blood_group' => 'required',
            'mobile' =>'required',
        ]);

        $image = $request->file('image');
        if ($image == null)
        {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->blood_group = $request->blood_group;
            $user->city = $request->city;
            $user->mobile = $request->mobile;
            $user->save();
            return redirect('/my-profile')->with('message', 'Your Profile update successfully!!!');
        }
        else
        {
            $imageName = $image->getClientOriginalName();
            $newImageName = explode('.', $imageName, 2);
            $newImageName[0] =  Auth::user()->id.'_'.$request->name;
            $newImageName = implode('.', $newImageName);
            $uploadPath = 'assets/userImage/';
            $image->move($uploadPath, $newImageName);
            $imageUrl = $uploadPath . $newImageName;
            $this->saveUser($request, $imageUrl);
            return redirect('/my-profile')->with('message', 'Your Profile update successfully!!!');
        }
    }
    public function saveUser($request, $imageUrl)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->blood_group = $request->blood_group;
        $user->city = $request->city;
        $user->imageUrl = $imageUrl;
        $user->mobile = $request->mobile;
        $user->save();
    }

}
