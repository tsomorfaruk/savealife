@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block" class="gallery-block">
        <div class="head-bg">
            <div class="head-bg-img"></div>
            <div class="head-bg-content">
                <h1>Organizations</h1>
            </div>
        </div>
        <div class="custom-container gallery-container">
            <div class="container">
                <div class="gallery-box clearfix">
                    <a class="gallery-a" href="#"><img src="{{asset('/')}}assets/img/gallery-img-1.png" alt="img"></a>
                    <div class="gallery-info">
                        <h3>Lorem title text</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto aut corporis cumque dignissimos eos exercitationem facere labore labori.</p>
                    </div>
                    <div class="gallery-btn">
                        <a class="btn-login btn color-1 size-2 hover-2" href="#">
                            FOLLOW
                        </a>
                        <a class="btn-login btn color-1 size-2 hover-2" href="#">
                            JOIN
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

