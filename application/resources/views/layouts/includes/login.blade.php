<div class="be-fixed-filter"></div>

<div class="large-popup login">
    <div class="large-popup-fixed"></div>
    <div class="container large-popup-container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-times close-button"></i>
                        <h5 class="large-popup-title">Log in</h5>
                    </div>
                        {!! Form::open(['url'=>'login', 'method'=>'POST']) !!}
                        <div class="col-md-6">
                            <input class="input-signtype" type="email" required="" name="email" placeholder="Your email">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="password" required="" name="password" placeholder="Password">
                        </div>
                        <div class="col-xs-6">
                            {{--<div class="be-checkbox">
                                <label class="check-box">
                                    <input class="checkbox-input" type="checkbox" value=""> <span class="check-box-sign"></span>
                                </label>
                                <span class="large-popup-text">
									Stay signed in
								</span>
                            </div>--}}

                            <a href="{{ route('password.request') }}" class="link-large-popup">Forgot password?</a>
                        </div>
                        <div class="col-xs-6 for-signin">
                            <input type="submit" class="be-popup-sign-button" value="SIGN IN">
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>