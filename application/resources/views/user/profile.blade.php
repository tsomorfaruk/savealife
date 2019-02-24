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
                    <div class="be-desc-block">
                        <div class="be-desc-author">
                            <div class="be-desc-label">About Me</div>
                            <div class="clearfix"></div>
                            <div class="be-desc-text">
                                Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at
                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis facilisis
                                nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa vitae lectus
                                placerat ullamcorper pellentesque vel nisl.
                            </div>
                        </div>
                        <div class="be-desc-author">
                            <div class="be-desc-label">My Values</div>
                            <div class="clearfix"></div>
                            <div class="be-desc-text">
                                Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.
                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales, nulla
                                libero ornare dolor.
                            </div>
                        </div>
                    </div>
                    <a class="btn full color-1 size-1 hover-1"><i class="fa fa-plus"></i>add sections</a>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="tab-wrapper style-1">
                        <div class="tab-nav-wrapper">
                            <div class="nav-tab  clearfix">
                                <div class="nav-tab-item active">
                                    <span>Projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content clearfix">
                            <div class="tab-info active">
                                <div class="row">
                                    <div class="col-ml-12 col-xs-6 col-sm-4">
                                        <div class="be-post">
                                            <a href="page1.html" class="be-img-block">
                                                <img src="img/p15.jpg" alt="omg">
                                            </a>
                                            <a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent
                                                Life Magazinen</a>
                                            <span>
												<a href="page1.html" class="be-post-tag">Interaction Design</a>,
												<a href="page1.html" class="be-post-tag">UI/UX</a>,
												<a href="page1.html" class="be-post-tag">Web Design</a>
											</span>
                                            <div class="author-post">
                                                <img src="img/a1.png" alt="" class="ava-author">
                                                <span>by <a href="page1.html">Hoang Nguyen</a></span>
                                            </div>
                                            <div class="info-block">
                                                <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                                <span><i class="fa fa-eye"></i> 789</span>
                                                <span><i class="fa fa-comment-o"></i> 20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

