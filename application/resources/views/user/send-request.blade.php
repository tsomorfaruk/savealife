@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <br>
        <br>
        <div class="container-fluid custom-container">
            <div class="row">

                <div class="col-md-2 left-feild">
                    <div class="be-vidget">
                        <h3 class="letf-menu-article">
                            Popular Creative Filds
                        </h3>
                        <div class="creative_filds_block">
                            <div class="ul">
                                <a data-filter=".category-1" class="filter">Graphic Design </a>
                                <a data-filter=".category-2" class="filter">Photography </a>
                                <a data-filter=".category-3" class="filter">Interaction Design </a>
                                <a data-filter=".category-4" class="filter">Art Direction </a>
                                <a data-filter=".category-5" class="filter">Illustration </a>
                            </div>
                        </div>
                    </div>
                    <div class="be-vidget">
                        <h3 class="letf-menu-article">
                            Popular Tags
                        </h3>
                        <div class="tags_block clearfix">
                            <ul>
                                <li><a data-filter=".category-6" class="filter">photoshop</a></li>
                                <li><a data-filter=".category-1" class="filter">graphic</a></li>
                                <li><a data-filter=".category-2" class="filter">art</a></li>
                                <li><a data-filter=".category-3" class="filter">website</a></li>
                                <li><a data-filter=".category-4" class="filter">logo</a></li>
                                <li><a data-filter=".category-5" class="filter">identity</a></li>
                                <li><a data-filter=".category-6" class="filter">logo design</a></li>
                                <li><a data-filter=".category-1" class="filter">interactive</a></li>
                                <li><a data-filter=".category-2" class="filter">blue</a></li>
                                <li><a data-filter=".category-3" class="filter">branding</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="be-vidget">
                        <h3 class="letf-menu-article">
                            Filter By
                        </h3>
                        <div class="filter-block">
                            <ul>
                                <li><a><i class="fa fa-graduation-cap"></i>Schools</a>
                                    <div class="be-popup">
                                        <h3 class="letf-menu-article">
                                            Enter School
                                        </h3>
                                        <form action="http://demo.nrgthemes.com/projects/nrgnetwork/"
                                              class="input-search">
                                            <input class="filters-input" type="text" required
                                                   placeholder="Start typing to see list">
                                        </form>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li><a><i class="fa fa-wrench"></i>Tools Used</a>
                                    <div class="be-popup">
                                        <h3 class="letf-menu-article">
                                            Tools
                                        </h3>
                                        <form action="http://demo.nrgthemes.com/projects/nrgnetwork/"
                                              class="input-search">
                                            <input class="filters-input" type="text" required
                                                   placeholder="Start typing to see list">
                                        </form>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li><a><i class="fa fa-paint-brush"></i>Color</a>
                                    <div class="be-popup be-color-picker">
                                        <h3 class="letf-menu-article">
                                            Choose color
                                        </h3>
                                        <div class="for-colors">
                                            <ul class="colors  cfix">
                                                <li data-filter=".category-1" class="color filter color-0-0"></li>
                                                <li data-filter=".category-2" class="color filter color-0-1"></li>
                                                <li data-filter=".category-3" class="color filter color-0-2"></li>
                                                <li data-filter=".category-4" class="color filter color-0-3"></li>
                                                <li data-filter=".category-5" class="color filter color-0-4"></li>
                                                <li data-filter=".category-1" class="color filter color-0-5"></li>
                                                <li data-filter=".category-2" class="color filter color-0-6"></li>
                                                <li data-filter=".category-3" class="color filter color-0-7"></li>
                                                <li data-filter=".category-4" class="color filter color-0-8"></li>
                                                <li data-filter=".category-5" class="color filter color-0-9"></li>
                                                <li data-filter=".category-1" class="color filter color-0-10"></li>
                                                <li data-filter=".category-5" class="color filter color-0-11"></li>
                                                <li data-filter=".category-1" class="color filter color-1-0"></li>
                                                <li data-filter=".category-2" class="color filter color-1-1"></li>
                                                <li data-filter=".category-1" class="color filter color-1-2"></li>
                                                <li data-filter=".category-1" class="color filter color-1-3"></li>
                                                <li data-filter=".category-1" class="color filter color-1-4"></li>
                                                <li data-filter=".category-4" class="color filter color-1-5"></li>
                                                <li data-filter=".category-1" class="color filter color-1-6"></li>
                                                <li data-filter=".category-1" class="color filter color-1-7"></li>
                                                <li data-filter=".category-6" class="color filter color-1-8"></li>
                                                <li data-filter=".category-1" class="color filter color-1-9"></li>
                                                <li data-filter=".category-1" class="color filter color-1-10"></li>
                                                <li data-filter=".category-1" class="color filter color-1-11"></li>
                                                <li data-filter=".category-1" class="color filter color-2-0"></li>
                                                <li data-filter=".category-1" class="color filter color-2-1"></li>
                                                <li data-filter=".category-1" class="color filter color-2-2"></li>
                                                <li data-filter=".category-1" class="color filter color-2-3"></li>
                                                <li data-filter=".category-1" class="color filter color-2-4"></li>
                                                <li data-filter=".category-1" class="color filter color-2-5"></li>
                                                <li data-filter=".category-1" class="color filter color-2-6"></li>
                                                <li data-filter=".category-1" class="color filter color-2-7"></li>
                                                <li data-filter=".category-1" class="color filter color-2-8"></li>
                                                <li data-filter=".category-1" class="color filter color-2-9"></li>
                                                <li data-filter=".category-1" class="color filter color-2-10"></li>
                                                <li data-filter=".category-1" class="color filter color-2-11"></li>
                                                <li data-filter=".category-1" class="color filter color-3-0"></li>
                                                <li data-filter=".category-1" class="color filter color-3-1"></li>
                                                <li data-filter=".category-1" class="color filter color-3-2"></li>
                                                <li data-filter=".category-1" class="color filter color-3-3"></li>
                                                <li data-filter=".category-1" class="color filter color-3-4"></li>
                                                <li data-filter=".category-1" class="color filter color-3-5"></li>
                                                <li data-filter=".category-1" class="color filter color-3-6"></li>
                                                <li data-filter=".category-1" class="color filter color-3-7"></li>
                                                <li data-filter=".category-1" class="color filter color-3-8"></li>
                                                <li data-filter=".category-1" class="color filter color-3-9"></li>
                                                <li data-filter=".category-1" class="color filter color-3-10"></li>
                                                <li data-filter=".category-1" class="color filter color-3-11"></li>
                                                <li data-filter=".category-1" class="color filter color-4-0"></li>
                                                <li data-filter=".category-1" class="color filter color-4-1"></li>
                                                <li data-filter=".category-1" class="color filter color-4-2"></li>
                                                <li data-filter=".category-1" class="color filter color-4-3"></li>
                                                <li data-filter=".category-1" class="color filter color-4-4"></li>
                                                <li data-filter=".category-1" class="color filter color-4-5"></li>
                                                <li data-filter=".category-1" class="color filter color-4-6"></li>
                                                <li data-filter=".category-1" class="color filter color-4-7"></li>
                                                <li data-filter=".category-1" class="color filter color-4-8"></li>
                                                <li data-filter=".category-1" class="color filter color-4-9"></li>
                                                <li data-filter=".category-1" class="color filter color-4-10"></li>
                                                <li data-filter=".category-1" class="color filter color-4-11"></li>
                                                <li data-filter=".category-1" class="color filter color-5-0"></li>
                                                <li data-filter=".category-1" class="color filter color-5-1"></li>
                                                <li data-filter=".category-1" class="color filter color-5-2"></li>
                                                <li data-filter=".category-1" class="color filter color-5-3"></li>
                                                <li data-filter=".category-1" class="color filter color-5-4"></li>
                                                <li data-filter=".category-1" class="color filter color-5-5"></li>
                                                <li data-filter=".category-1" class="color filter color-5-6"></li>
                                                <li data-filter=".category-1" class="color filter color-5-7"></li>
                                                <li data-filter=".category-1" class="color filter color-5-8"></li>
                                                <li data-filter=".category-1" class="color filter color-5-9"></li>
                                                <li data-filter=".category-1" class="color filter color-5-10"></li>
                                                <li data-filter=".category-1" class="color filter color-5-11"></li>
                                                <li data-filter=".category-1" class="color filter color-6-0"></li>
                                                <li data-filter=".category-1" class="color filter color-6-1"></li>
                                                <li data-filter=".category-6" class="color filter color-6-2"></li>
                                                <li data-filter=".category-1" class="color filter color-6-3"></li>
                                                <li data-filter=".category-1" class="color filter color-6-4"></li>
                                                <li data-filter=".category-1" class="color filter color-6-5"></li>
                                                <li data-filter=".category-1" class="color filter color-6-6"></li>
                                                <li data-filter=".category-1" class="color filter color-6-7"></li>
                                                <li data-filter=".category-1" class="color filter color-6-8"></li>
                                                <li data-filter=".category-1" class="color filter color-6-9"></li>
                                                <li data-filter=".category-1" class="color filter color-6-10"></li>
                                                <li data-filter=".category-1" class="color filter color-6-11"></li>
                                                <li data-filter=".category-1" class="color filter color-7-0"></li>
                                                <li data-filter=".category-1" class="color filter color-7-1"></li>
                                                <li data-filter=".category-1" class="color filter color-7-2"></li>
                                                <li data-filter=".category-1" class="color filter color-7-3"></li>
                                                <li data-filter=".category-1" class="color filter color-7-4"></li>
                                                <li data-filter=".category-1" class="color filter color-7-5"></li>
                                                <li data-filter=".category-1" class="color filter color-7-6"></li>
                                                <li data-filter=".category-1" class="color filter color-7-7"></li>
                                                <li data-filter=".category-1" class="color filter color-7-8"></li>
                                                <li data-filter=".category-1" class="color filter color-7-9"></li>
                                                <li data-filter=".category-1" class="color filter color-7-10"></li>
                                                <li data-filter=".category-1" class="color filter color-7-11"></li>
                                                <li data-filter=".category-1" class="color filter color-8-0"></li>
                                                <li data-filter=".category-1" class="color filter color-8-1"></li>
                                                <li data-filter=".category-1" class="color filter color-8-2"></li>
                                                <li data-filter=".category-1" class="color filter color-8-3"></li>
                                                <li data-filter=".category-1" class="color filter color-8-4"></li>
                                                <li data-filter=".category-1" class="color filter color-8-5"></li>
                                                <li data-filter=".category-1" class="color filter color-8-6"></li>
                                                <li data-filter=".category-6" class="color filter color-8-7"></li>
                                                <li data-filter=".category-1" class="color filter color-8-8"></li>
                                                <li data-filter=".category-1" class="color filter color-8-9"></li>
                                                <li data-filter=".category-1" class="color filter color-8-10"></li>
                                                <li data-filter=".category-1" class="color filter color-8-11"></li>
                                                <li data-filter=".category-1" class="color filter color-9-0"></li>
                                                <li data-filter=".category-1" class="color filter color-9-1"></li>
                                                <li data-filter=".category-1" class="color filter color-9-2"></li>
                                                <li data-filter=".category-1" class="color filter color-9-3"></li>
                                                <li data-filter=".category-6" class="color filter color-9-4"></li>
                                                <li data-filter=".category-1" class="color filter color-9-5"></li>
                                                <li data-filter=".category-1" class="color filter color-9-6"></li>
                                                <li data-filter=".category-1" class="color filter color-9-7"></li>
                                                <li data-filter=".category-1" class="color filter color-9-8"></li>
                                                <li data-filter=".category-1" class="color filter color-9-9"></li>
                                                <li data-filter=".category-1" class="color filter color-9-10"></li>
                                                <li data-filter=".category-1" class="color filter color-9-11"></li>
                                            </ul>
                                        </div>
                                        <i class="fa fa-times"></i>

                                    </div>
                                </li>
                                <li><a><i class="fa fa-camera-retro"></i>Visit Gallery</a>
                                    <div class="be-popup">
                                        <h3 class="letf-menu-article">
                                            Galerry
                                        </h3>
                                        <form action="http://demo.nrgthemes.com/projects/nrgnetwork/"
                                              class="input-search">
                                            <input class="filters-input" type="text" required
                                                   placeholder="Start typing to see list">
                                        </form>
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div id="container-mix" class="row _post-container_">
                        @foreach($posts as $post)

                        <div class="category-3 mix custom-column-5">
                            <div class="be-post">
                                <a href="page1.html" class="be-img-block">
                                    <img src="{{asset('/')}}assets/img/p14.jpg" alt="omg">
                                </a>
                                <a href="page1.html" class="be-post-title">{{$post->blood_group}}</a>
                                <span>
									<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,
									<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,
									<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>
								</span>
                                <div class="author-post">
                                    <img src="{{asset('/')}}assets/img/a1.png" alt="" class="ava-author">
                                    <span>by <a href="page1.html">{{$post->city}}</a></span>
                                </div>
                                <div class="info-block">
                                    <span><i class="fa fa-thumbs-o-up"></i> 360</span>
                                    <span><i class="fa fa-eye"></i> 789</span>
                                    <span><i class="fa fa-comment-o"></i> 20</span>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

