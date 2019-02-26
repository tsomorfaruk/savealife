@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-12 col-md-4 left-feild">
                    <div class="be-user-block style-3">
                        <div class="be-user-detail">
                            <a class="be-ava-user style-2" href="{{url('/my-profile')}}">
                                <img src="{{asset('/')}}assets/img/ava_10.jpg" alt="">
                            </a>
                            <a class="be-ava-left btn color-1 size-2 hover-1" href="author-edit.html"><i
                                        class="fa fa-pencil"></i>Edit</a>
                            <div class="be-ava-right btn btn-share color-4 size-2 hover-7">
                                <i class="fa fa-share-alt"></i>share
                                <div class="share-buttons">
                                    <a class="color-1" href="page1.html"><i class="fa fa-facebook"></i> 278</a>
                                    <a class="color-2" href="page1.html"><i class="fa fa-twitter"></i> 180</a>
                                    <a class="color-3" href="page1.html"><i class="fa fa-pinterest-p"></i> 78</a>
                                    <a class="color-4" href="page1.html"><i class="fa fa-linkedin"></i> 53</a>
                                </div>
                            </div>
                            <p class="be-use-name">{{Auth::user()->name}}</p>
                            <div class="be-user-info">
                                {{Auth::user()->city}}
                            </div>
                            <div class="be-text-tags style-2">
                                <h3 style="color: #f73347; "><b>{{Auth::user()->blood_group}}</b></h3>
                            </div>
                            <h4 class="be-user-site"><i class="fa fa-link"></i>
                                {{Auth::user()->mobile}}</h4>
                        </div>
                        <div class="be-user-statistic">
                            <div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Projects views<span
                                        class="stat-counter">218098</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Appreciations<span
                                        class="stat-counter">14335</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Followers<span
                                        class="stat-counter">2208</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-following-b"></i>Following<span
                                        class="stat-counter">0</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>Active Post</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Completed Post</span>
                                </div>
                                <div class="nav-tab-item ">
                                    <span>Canceled Post</span>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
                                <div class="row">
                                    @if(count($active_posts)== 0)
                                        <p>You have no active post</p>
                                    @else
                                        @foreach($active_posts as $active_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <p>{{ Session::get('post_message') }}</p>
                                                <div class="be-post">
                                                    <a href="page1.html" class="be-img-block">
                                                        <img src="img/p1.jpg" alt="omg">
                                                    </a>
                                                    <a href="#" class="be-post-title">{{$active_post->blood_group}}</a>

                                                    <div class="author-post">
                                                        <img src="img/a1.png" alt="" class="ava-author">
                                                        <span>by <a href="#">{{$active_post->city}}</a></span>
                                                    </div>
                                                    <div class="info-block">
                                                        <form action="{{url('/cancel-post')}}" method="POST" style="float: left">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger" name="post_id" value="{{$active_post->id}}">Cancel</button>
                                                        </form>
                                                        <form action="{{url('/complete-post')}}" method="POST" style="float: left">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success" name="post_id" value="{{$active_post->id}}">Complete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="tab-info">
                                <div class="row">
                                    @if(count($complete_posts)== 0)
                                        <p>You have no completed post</p>
                                    @else
                                        @foreach($complete_posts as $complete_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <div class="be-post">
                                                    <a href="" class="be-img-block">
                                                        <img src="img/p8.jpg" alt="omg">
                                                    </a>
                                                    <a href="" class="be-post-title">{{$complete_post->blood_group}}</a>

                                                    <div class="author-post">
                                                        <img src="img/a7.png" alt="" class="ava-author">
                                                        <span>by <a href="#">{{$complete_post->city}}</a></span>
                                                    </div>
                                                    <div class="info-block" style="background-color: #10ce30;">
                                                        <h3 style="color: #fff; text-align: center">Completed</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="tab-info">
                                <div class="row">
                                    @if(count($cancel_posts)== 0)
                                        <p>You have no canceled post.</p>
                                    @else
                                        @foreach($cancel_posts as $cancel_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <div class="be-post">
                                                    <a href="" class="be-img-block">
                                                        <img src="img/p8.jpg" alt="omg">
                                                    </a>
                                                    <a href="" class="be-post-title">{{$cancel_post->blood_group}}</a>

                                                    <div class="author-post">
                                                        <img src="img/a7.png" alt="" class="ava-author">
                                                        <span>by <a href="#">{{$cancel_post->city}}</a></span>
                                                    </div>
                                                    <div class="info-block" style="background-color: #f90c47;">
                                                        <h3 style="color: #fff; text-align: center">Canceled</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

