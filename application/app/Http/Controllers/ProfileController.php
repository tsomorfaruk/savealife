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
            'image' =>'required',
        ]);
        $image = $request->file('image');
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
