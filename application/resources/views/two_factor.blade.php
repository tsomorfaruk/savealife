{{--@extends('layouts.app')--}}
{{--@section('content')--}}
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('/')}}assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/icon.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/loader.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/idangerous.swiper.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/stylesheet.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/style/ie-9.css">
</head>
<body>
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row" >
            <div class="col-xs-12 col-md-9 _editor-content_">

                <div class="sec"  data-sec="edit-password">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label">OTP Verification</h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label">OTP</div>
                                        @if(Session::has('fail'))
                                            <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                                        @endif

                                        @if(Session::has('success'))
                                            <div class="alert alert-success"> {{ Session::get('success') }}</div>
                                        @endif
                                        <form class="form-inline" action="{{ route('otpverification'), Auth::user()->id }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                        <input class="form-input" type="text" name="fa" placeholder="Give your OTP here...">
                                    </div>
                                </div>
                                <div class=" col-xs-12 ">
                                     <button type="submit" class="btn btn-success size-2 hover-1 btn-right" style="float: right">Submit OTP</button>
                                    </form>

                                    <form action="{{ route('resend')}}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger size-2 hover-1 btn-right" style="float: left">Resend OTP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>

    {{--<div id="content-block">
        <div class="col-md-10">
            <div id="container-mix" class="row _post-container_">
                <div class="category-1 mix custom-column-5">
                    <div class="be-post">
                        @if(Session::has('fail'))
                            <div class="alert alert-danger"> {{ Session::get('fail') }}</div>
                        @endif

                        @if(Session::has('success'))
                            <div class="alert alert-success"> {{ Session::get('success') }}</div>
                        @endif

                        <div class="col-md-5">
                            <form class="form-inline" action="{{ route('otpverification'), Auth::user()->id }}"
                                  method="POST">
                                {{ csrf_field() }}

                                <input type="text" name="fa" placeholder="give your otp here">
                                <button type="submit" class="btn-info"> Verify OTP</button>
                            </form>


                            @if(Session::has('fail'))
                                <form action="{{ route('resend')}}" method="POST">
                                    {{ csrf_field() }}

                                    <button type="submit" class="btn-warning"> Resend new OTP</button>
                                </form>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>--}}

{{--@endsection()--}}
