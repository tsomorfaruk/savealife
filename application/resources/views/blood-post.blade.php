@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container-fluid custom-container">
            <div class="row">
                <br>
                <div class="col-md-10 col-md-push-2">
                    <div id="container-mix" class="be-user-wrapper row">
                        @foreach($posts as $post)
                            @if($post->blood_group == 'A+')
                            <div  class="mix category-1 custom-column-5">

                                <div class="be-user-block style-2">
                                    <a class="be-ava-user style-2" href="#">
                                        <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                    </a>
                                    <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                    <div class="be-text-tags">

                                        <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                    </div>
                                    <div class="info-block">
                                        <h4 style="color: #f90c47"><b> Needed </b></h4>
                                    </div>
                                    <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                    <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'A-')
                                    <div  class="mix category-2 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'B+')
                                    <div  class="mix category-3 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <input type="hidden" id="{{  $post->id }} " class="post-id">
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'B-')
                                    <div  class="mix category-4 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'O+')
                                    <div  class="mix category-5 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'O-')
                                    <div  class="mix category-6 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'AB+')
                                    <div  class="mix category-7 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach($posts as $post)
                                @if($post->blood_group == 'AB-')
                                    <div  class="mix category-8 custom-column-5">

                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                            </a>
                                            <p class="be-user-info"><span>Place: {{  $post->city }}</span></p>
                                            <div class="be-text-tags">

                                                <h4 style="color: red"><b>{{  $post->blood_group }} </b></h4>
                                            </div>
                                            <div class="info-block">
                                                <h4 style="color: #f90c47"><b> Needed </b></h4>
                                            </div>

                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{Auth::user()->id}}">Donate</a>
                                            <p class="be-user-info"><span>Posted By: {{ $post->user->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                    </div>
                </div>
                <div class="col-md-2 col-md-pull-10 left-feild">
                    <div class="be-vidget">
                        <h3 class="letf-menu-article">Blood Group</h3>
                        <div class="creative_filds_block">
                            <div class="ul">
                                <a data-filter=".category-1" class="filter">A+</a>
                                <a data-filter=".category-2" class="filter">A-</a>
                                <a data-filter=".category-3" class="filter">B+</a>
                                <a data-filter=".category-4" class="filter">B-</a>
                                <a data-filter=".category-5" class="filter">O+</a>
                                <a data-filter=".category-6" class="filter">O-</a>
                                <a data-filter=".category-7" class="filter">AB+</a>
                                <a data-filter=".category-8" class="filter">AB-</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <script>
            $(document).on('click', '.accept-donor', function () {
                var donor_id = $(this).attr("id");
                var post_id = $('.post-id').attr("id");
                console.log(donor_id);
                console.log(post_id);
                $(this).addClass('disabled');
                $.ajax({
                    url: "{{URL::to('accept-request')}}",
                    method: 'get',
                    data: {
                        donor_id: donor_id,
                        post_id: post_id,
                        '_token': $('input[name=_token]').val(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $(this).removeClass('disabled');
                    }
                })
            });
        </script>
        <script type="text/javascript">
            $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        </script>
@endsection

