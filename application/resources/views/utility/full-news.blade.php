@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container be-detail-container">
            <h2 class="content-title">Our News</h2>
            <div class="blog-wrapper blog-list blog-fullwith">

                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <div class="blog-post be-large-post type-2">
                            <div class="be-large-post-align blog-content">
                                <div class="be-text-tags clearfix custom-a-b">
                                    <br>
                                    <div class="post-date">
                                        <i class="fa fa-clock-o"></i> {{$news->news_created_at}}
                                    </div>
                                    <div class="author-post">
                                        <img src="img/a1.png" alt="" class="ava-author">
                                        <span>by <a href="blog-detail-2.html">{{$news->news_created_by}}</a></span>
                                    </div>
                                </div>
                                <a class="post-preview post-image" href="#"><img class="img-responsive img-full"
                                                                                 src="{{asset('/').$news->news_imageUrl}}"
                                                                                 alt=""></a>
                                <h3 class="be-post-title" style="text-align: center">
                                    {{$news->news_title}}
                                </h3>
                                <div class="post-text" style="font-family: Arial; font-size: 16px;color: #000;">
                                    <p>{{$news->news_article}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
