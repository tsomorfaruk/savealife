@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container be-detail-container">
            <div class="block">
                <h3 style="color: #00a157; text-align: center; margin-bottom: 10px">{{ Session::get('contact_message') }}</h3>
                <h2 class="content-title">Contact Information</h2>
                <div class="block-subtitle">Class aptent taciti sociosqu ad litora torquent per conubia nostra</div>
                <div class="contact-info block">
                    <div class="contact-header">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-entry">
                                    <h4 class="contact-label"><img src="img/marker.png" alt=""> Contact address</h4>
                                    <div class="contact-text">
                                        <p>New York, BRONX, Morris Park Ave 13</p>
                                        <p>New York, Guerlain Street 87</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-entry">
                                    <h4 class="contact-label"><img src="img/phone-ico.png" alt=""> Phones</h4>
                                    <div class="contact-text">
                                        <p><a href="tel:+99123456789001">+99 (123) 456 789 001</a></p>
                                        <p><a href="tel:+1234556789">+1 (23) 45 567 89</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-entry">
                                    <h4 class="contact-label"><img src="img/mail-ico.png" alt=""> Email</h4>
                                    <div class="contact-text">
                                        <p><a href="mailto:NRGNetwork@contact.com">NRGNetwork@contact.com</a></p>
                                        <p><a href="mailto:Support@gmail.com">Support@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="map-canvas" data-lat="23.792293" data-lng="90.423962" data-zoom="15"></div>
                    <div class="addresses-block">
                        <a data-lat="40.669096" data-lng="-73.987733" data-string="1. Here is some address or email or phone or something else..."></a>
                    </div>
                </div>
            </div>

            <div class="block">
                <h2 class="content-title">Leave a message</h2>
                <div class="block-subtitle">Maecenas et mollis ligula. Donec finibus feugiat laoreet.</div>
                <div class="contect-form">

                    <form class="form-block" method="POST" action="{{url('/contact-us')}}">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group fl_icon">
                                    <div class="icon"><img src="{{asset('/')}}assets/img/user-g-ico.png" alt=""></div>
                                    <input class="form-input" type="text" name="name" required="" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 fl_icon">
                                <div class="form-group fl_icon">
                                    <div class="icon"><img src="img/subject-ico.png" alt=""></div>
                                    <input class="form-input" type="text" name="subject" required="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 fl_icon">
                                <div class="form-group fl_icon">
                                    <div class="icon"><img src="img/mail-g-ico.png" alt=""></div>
                                    <input class="form-input" type="email" name="email" required="" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 fl_icon">
                                <div class="form-group fl_icon">
                                    <div class="icon"><img src="img/phone-g-ico.png" alt=""></div>
                                    <input class="form-input" type="text" name="mobile" required="" placeholder="Your phone">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-input" required="" name="message" placeholder="Your message"></textarea>
                                </div>
                            </div>
                            <button class="btn color-1 size-2 hover-1 pull-right">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="{{asset('/')}}assets/script/map.js"></script>
@endsection
