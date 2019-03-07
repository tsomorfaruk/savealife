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
        <div class="row">
            <div class="col-xs-12 col-md-9 _editor-content_">

                <div class="sec" data-sec="edit-password">
                    <div class="be-large-post">
                        <div class="info-block style-2">
                            <div class="be-large-post-align"><h3 class="info-block-label">Password Reset</h3></div>
                        </div>
                        <div class="be-large-post-align">
                            <div class="row">
                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <div class="form-label">Email</div>
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form class="form-inline" method="POST" action="{{ route('password.update') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <input id="email" type="email"
                                                   class="form-input{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ $email ?? old('email') }}"
                                                   placeholder="Give your Email here..." required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong></span>
                                            @endif
                                            <div class="form-label">Password</div>
                                            <input id="password" type="password"
                                                   class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-label">Confirm Password</div>
                                            <input id="password-confirm" type="password" class="form-input"
                                                   name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class=" col-xs-12 ">
                                    <button type="submit" class="btn btn-success size-2 hover-1 btn-right"
                                            style="float: right">Submit
                                    </button>
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
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}

