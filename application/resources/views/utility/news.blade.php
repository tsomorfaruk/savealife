@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container be-detail-container">
            <h2 class="content-title">News</h2>
            <div class="blog-wrapper blog-list">
                @foreach($news as $single_news)
                <div class="blog-post">
                    <div class="row">

                            <div class="col-xs-12 col-sm-4">
                                <a class="post-preview post-image" href="{{url('/news/'.$single_news->id)}}"><img style="min-height: 200px; width: 300px"
                                                                                 src="{{asset('/').$single_news->news_imageUrl}}"
                                                                                 alt=""></a>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="post-desc">
                                    <a class="post-label" href="{{url('/news/'.$single_news->id)}}">{{$single_news->news_title}}</a>
                                    <div class="post-text">{{substr($single_news->news_article, 0 , 400)}}...  <a href="{{url('/news/'.$single_news->id)}}" class="btn color-1" >Read More</a>
                                    </div>
                                    <div class="author-post">
                                        <span>created by <a href="#">{{$single_news->news_created_by}}</a>, {{$single_news->news_created_at}}</span>
                                    </div>
                                    <br>
                                </div>
                            </div>

                    </div>

                </div>
                @endforeach
                {{$news->links()}}
            </div>
        </div>
    </div>
@endsection
