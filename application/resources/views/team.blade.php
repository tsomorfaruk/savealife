@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection
@section('content')
    <div id="content-block">
        <div class="container">
            <div class="about-description">

            </div>
            <div class="block">
                <h3 class="block-title">Our Team As They Are</h3>
                <br>
                <div class="row">
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="team-img-design"  height="260px" width="260px"  src="{{asset('/')}}assets/img/Atik.png" alt=""></a>
                            <h4 class="team-name">Atikur Rahman</h4>
                            <div class="team-position">
                                <a href="#"  class="be-post-tag">Project Director</a>
                            </div>
                            <div class="team-social">
                                <a href="https://www.facebook.com/atikur.rahman.376"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="#"><img class="team-img-design" height="260px" width="260px"  src="{{asset('/')}}assets/img/ilias shah.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Ilias Shah</h4>
                            <div class="team-position">
                                <a href="#" class="be-post-tag">Design Guru</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="team-img-design" height="260px" width="260px" src="{{asset('/')}}assets/img/omor.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Omor Faruk</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Web Developer</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="team-img-design" height="260px" width="260px" src="{{asset('/')}}assets/img/ashraful.jpg" height="20px" alt=""></a>
                            <h4 class="team-name">Ashraful Rasel</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Web Developer</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="blog-detail-2.html" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
