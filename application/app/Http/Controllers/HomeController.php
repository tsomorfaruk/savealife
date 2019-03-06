<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$users = User::all();
        $news = News::orderBy('created_at', 'DESC')->take(3)->get();
        return view('home',['news'=>$news]);
    }


}
