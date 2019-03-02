<div class="be-loader">
    <div class="spinner">
        <img src="{{asset('/')}}assets/img/save-a-life.png" height="35px" width="70px" alt="">
        <p class="circle">
			  <span class="ouro">
			    <span class="left"><span class="anim"></span></span>
			    <span class="right"><span class="anim"></span></span>
			  </span>
        </p>
    </div>
</div>

<header>
    <div class="container-fluid custom-container">
        <div class="row no_row row-header">
            <div class="brand-be">
                <a href="{{url('/')}}">
                    <img class="logo-c active be_logo" src="{{asset('/')}}assets/img/save-a-life.png" height="35px" width="70px" alt="logo">
                    <img class="logo-c be_logo" src="{{asset('/')}}assets/img/logo-green.png" alt="logo2">
                    <img class="logo-c be_logo" src="{{asset('/')}}assets/img/logo-orang.png" alt="logo3">
                    <img class="logo-c be_logo" src="{{asset('/')}}assets/img/logo-red.png" alt="logo4">
                </a>
            </div>


            @guest
                <div class="login-header-block">
                    <div class="login_block">
                        <a class="btn-login btn color-1 size-2 hover-2" href="{{ route('login') }}"><i
                                    class="fa fa-user"></i>
                            Log in</a>
                    </div>
                </div>
            @else
                <div class="login-header-block">
                    <div class="login_block">
                        <a class="notofications-popup" href="page1.html">
                            <i class="fa fa-bell-o"></i>
                            <span class="noto-count">1</span>
                        </a>
                        <div class="noto-popup notofications-block">
                            <div class="m-close"><i class="fa fa-times"></i></div>
                            <div class="noto-label">Your Notification</div>
                            <div class="noto-body">


                                <div class="noto-entry">
                                    <div class="noto-content clearfix">
                                        <div class="noto-img">
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/img/c9.jpg" alt="" class="be-ava-comment">
                                            </a>
                                        </div>
                                        <div class="noto-text">
                                            <div class="noto-text-top">
                                                <span class="noto-name"><a href="#">Cüneyt ŞEN</a></span>
                                                <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                            </div>
                                            <a href="#" class="noto-message">
                                                Start following your work
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="messages-popup" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="noto-count">1</span>
                        </a>
                        <div class="noto-popup messages-block">
                            <div class="m-close"><i class="fa fa-times"></i></div>
                            <div class="noto-label">Your Messages <span class="noto-label-links"><a href="#">compose</a><a href="#">View all messages</a></span></div>
                            <div class="noto-body">
                                <div class="noto-entry style-2">
                                    <div class="noto-content clearfix">
                                        <div class="noto-img">
                                            <a href="#">
                                                <img src="{{asset('/')}}assets/img/c6.jpg" alt="" class="be-ava-comment">
                                            </a>
                                        </div>
                                        <div class="noto-text">
                                            <div class="noto-text-top">
                                                <span class="noto-name"><a href="page1.html">Louis Paquet</a></span>
                                                <span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
                                            </div>
                                            <div class="noto-message">
                                                Pellentesque habitant morbi tristique senectus et netus tristique senectus
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="be-drop-down login-user-down">
                            <img class="login-user" src="{{asset('/')}}assets/img/login.jpg" alt="">
                            <span class="be-dropdown-content">Hi, <span>{{Auth::user()->name}}</span></span>
                            <div class="drop-down-list a-list">
                                <a href="{{url('/my-profile')}}">My Profile</a>
                                <a href="{{url('/send-request')}}">Send Request </a>
                                <a href="{{url('/receive-request')}}">Receive Request </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
            <div class="header-menu-block">
                <button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
                <ul class="header-menu" id="one">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/blood-post')}}">Blood Post</a></li>
                    <li><a href="#">Top Donor</a></li>
                    <li><a href="{{url('/organization')}}">Organization</a></li>
                    <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                    <li><a href="{{url('/team')}}">Team</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
