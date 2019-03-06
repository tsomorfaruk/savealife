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
                                <img src="{{asset('').Auth::user()->imageUrl}}" alt="">
                            </a>
                            <a class="be-ava-left btn size-2 hover-1" style="background-color: #40e6ef " href="{{url('/my-profile/edit')}}"><i
                                        class="fa fa-pencil"></i>Edit</a>
                            <div class="be-ava-right btn btn-share size-2 hover-7" style="background-color: #6a9ef2;">
                                <i class="f1e0 fa fa-share-alt"></i>share
                                <div class="share-buttons">
                                    <a class="color-1" href="#" target="_blank"><i class="fa fa-facebook"></i> 278</a>
                                    <a class="color-2" href="#" target="_blank"><i class="fa fa-twitter"></i> 180</a>
                                    <a class="color-3" href="#" target="_blank"><i class="fa fa-pinterest-p"></i> 78</a>
                                    <a class="color-4" href="#" target="_blank"><i class="fa fa-linkedin"></i> 53</a>
                                </div>
                            </div>
                            <h4 style="color: #00E466; text-align: center; margin-bottom: 10px">{{ Session::get('message') }}</h4>
                            <p class="be-use-name">{{Auth::user()->name}}</p>
                            <div class="be-user-info">
                                <i class="f64f fa fa-city"></i> {{Auth::user()->city}}
                            </div>
                            <div class="be-text-tags style-2">
                                <h3 style="color: #f73347; "><b><i class="fa fa-tint"></i> {{Auth::user()->blood_group}}</b></h3>
                            </div>
                            <h4 class="be-user-site"><i class="f3cd fa fa-mobile-phone"></i>  {{Auth::user()->mobile}}</h4>
                        </div>
                        <div class="be-user-statistic">
                            <div class="stat-row clearfix"><i class="stat-icon icon-views-b"></i> Send Request<span
                                        class="stat-counter">{{ $send_requests->count()}}</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-like-b"></i>Receive Request<span
                                        class="stat-counter">{{ $receive_requests->count()}}</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-followers-b"></i>Active Posts<span
                                        class="stat-counter">{{ $active_posts->count()}}</span></div>
                            <div class="stat-row clearfix"><i class="stat-icon icon-following-b"></i>Complete Posts<span
                                        class="stat-counter">{{ $complete_posts->count()}}</span></div>
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
                                        <div class="col-ml-12 col-xs-12 col-sm-12">
                                            <h4 style="color: #1b4b72; text-align: center; margin-top: 10px;">You have no active post.</h4>
                                        </div>
                                    @else
                                        @foreach($active_posts as $active_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <h4 style="color: #00E466; text-align: center; margin-top: 10px">{{ Session::get('post_message') }}</h4>
                                                <div class="be-post">
                                                    <a href="#" class="be-img-block">
                                                        @if($active_post->blood_group == 'A+')
                                                        <img src="{{asset('/')}}assets/img/A+.jpg"  style="height: 200px;" alt="image">
                                                            @elseif($active_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'B+')
                                                            <img src="{{asset('/')}}assets/img/B+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'B-')
                                                            <img src="{{asset('/')}}assets/img/B-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'O+')
                                                            <img src="{{asset('/')}}assets/img/O+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'O-')
                                                            <img src="{{asset('/')}}assets/img/O-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'AB+')
                                                            <img src="{{asset('/')}}assets/img/AB+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($active_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/AB-.jpg" style="height: 200px;" alt="image">
                                                            @endif
                                                    </a>
                                                    <p class="be-post-title">{{$active_post->blood_group}}</p>

                                                    <div class="author-post">
                                                         <h4><b>{{$active_post->city}}</b></h4>
                                                    </div>
                                                    <div class="info-block">
                                                            <form action="{{url('/cancel-post')}}" method="POST" style="float: left; width: 100px; display: inline-block ">
                                                            @csrf
                                                                <button type="submit" class="btn btn-danger" style="padding: 12px 20px; background-color: #ff0505" name="post_id" value="{{$active_post->id}}">Cancel</button>
                                                        </form>
                                                        <form action="{{url('/complete-post')}}" method="POST" style=" float: left;width: 97px;display: inline-block ">
                                                            @csrf
                                                                <button type="submit" class="btn btn-success" style="padding: 12px 20px; background-color: #66c952" name="post_id" value="{{$active_post->id}}">Complete</button>
                                                        </form>
                                                        <div class="clearfix"></div>
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
                                        <div class="col-ml-12 col-xs-12 col-sm-12">
                                            <h4 style="color: #1b4b72; text-align: center; margin-top: 10px;">You have no completed post.</h4>
                                        </div>
                                    @else
                                        @foreach($complete_posts as $complete_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <div class="be-post">
                                                    <a href="#" class="be-img-block">
                                                        @if($complete_post->blood_group == 'A+')
                                                            <img src="{{asset('/')}}assets/img/A+.jpg"  style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'B+')
                                                            <img src="{{asset('/')}}assets/img/B+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'B-')
                                                            <img src="{{asset('/')}}assets/img/B-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'O+')
                                                            <img src="{{asset('/')}}assets/img/O+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'O-')
                                                            <img src="{{asset('/')}}assets/img/O-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'AB+')
                                                            <img src="{{asset('/')}}assets/img/AB+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($complete_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/AB-.jpg" style="height: 200px;" alt="image">
                                                        @endif
                                                    </a>
                                                    <p class="be-post-title">{{$complete_post->blood_group}}</p>

                                                    <div class="author-post">
                                                        <h4><b>{{$complete_post->city}}</b> </h4>
                                                    </div>
                                                    <div class="info-block" style="background-color: #7df45d;">
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
                                        <div class="col-ml-12 col-xs-12 col-sm-12">
                                            <h4 style="color: #1b4b72; text-align: center; margin-top: 10px;">You have no canceled post.</h4>
                                        </div>
                                    @else
                                        @foreach($cancel_posts as $cancel_post)
                                            <div class="col-ml-12 col-xs-6 col-sm-4">
                                                <div class="be-post">
                                                    <a href="#" class="be-img-block">
                                                        @if($cancel_post->blood_group == 'A+')
                                                            <img src="{{asset('/')}}assets/img/A+.jpg"  style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/A-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'B+')
                                                            <img src="{{asset('/')}}assets/img/B+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'B-')
                                                            <img src="{{asset('/')}}assets/img/B-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'O+')
                                                            <img src="{{asset('/')}}assets/img/O+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'O-')
                                                            <img src="{{asset('/')}}assets/img/O-.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'AB+')
                                                            <img src="{{asset('/')}}assets/img/AB+.jpg" style="height: 200px;" alt="image">
                                                        @elseif($cancel_post->blood_group == 'A-')
                                                            <img src="{{asset('/')}}assets/img/AB-.jpg" style="height: 200px;" alt="image">
                                                        @endif
                                                    </a>
                                                    <p class="be-post-title">{{$cancel_post->blood_group}}</p>
                                                    <div class="author-post">
                                                        <h4><b>{{$cancel_post->city}}</b></h4>
                                                    </div>
                                                    <div class="info-block" style="background-color: #ff6b6b;">
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

