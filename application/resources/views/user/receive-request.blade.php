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
                        @foreach($postdonors as $postdonor)
                                @if($postdonor->post->status == 1)
                                <div class="mix category-2 custom-column-5">
                                    <div class="be-user-block style-2">
                                        <a class="be-ava-user style-2" href="#">
                                            <img src="{{asset('/')}}assets/img/ava_2.jpg" alt="">
                                        </a>
                                        <p class="be-user-info"><span>Place: {{$postdonor->post->city}}</span></p>
                                        <div class="be-text-tags">

                                            <h4 style="color: red"><b>{{$postdonor->post->blood_group}} </b></h4>
                                        </div>
                                        <div class="info-block">
                                            <h4 style="color: #f90c47"><b> {{ $postdonor->post->post_user->mobile}}</b></h4>
                                            <p>Please contact this number</p>
                                        </div>
                                        <input type="hidden" id="{{  $postdonor->post->id }} " class="post-id">
                                        @if($postdonor->status == 2)
                                            <a class="btn color-1 size-2 hover-1" href="#" disabled="">Accepted</a>
                                            <a class="btn color-1 size-2 hover-1 accept-donor btn-danger" href="#"
                                               id="{{$postdonor->id}}">Cancel</a>
                                        @elseif($postdonor->status == 3)
                                            <a class="btn color-1 size-2 hover-1 " href="#" disabled="">Completed</a>
                                            @elseif($postdonor->status == 0)
                                            <a class="btn color-1 size-2 hover-1" href="#" disabled="">Canceled</a>
                                            @else
                                            <a class="btn color-1 size-2 hover-1 accept-donor" href="#" id="{{$postdonor->id}}">Accept</a>
                                        @endif

                                        <p class="be-user-info"><span>Posted By: {{ $postdonor->post->post_user->name}}</span>
                                        </p>
                                    </div>
                                </div>
                                @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
        <script>
            $(document).on('click', '.accept-donor', function () {
                var postdonor_id = $(this).attr("id");
                $(this).addClass('disabled');
                $.ajax({
                    url: "{{URL::to('accept-request')}}",
                    method: 'get',
                    data: {
                        id: postdonor_id,
                        '_token': $('input[name=_token]').val(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        $(this).removeClass('disabled');
                    }
                })
            });
        </script>
        <script>
            $(document).on('click', '.cancel-donor', function () {
                var postdonor_id = $(this).attr("id");
                $(this).addClass('disabled');
                $.ajax({
                    url: "{{URL::to('cancel-request')}}",
                    method: 'get',
                    data: {
                        id: postdonor_id,
                        '_token': $('input[name=_token]').val(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        $(this).removeClass('disabled');
                    }
                })
            });
        </script>
        <script type="text/javascript">
            $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        </script>
@endsection

