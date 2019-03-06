@extends('layouts.app')

@section('content')
    <div id="content-block">
        <div class="container be-detail-container">
            <div class="row">
                <div class="col-xs-8 col-md-8 _editor-content_">
                    <div class="sec" data-sec="basic-information">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="be-large-post">
                            <form method="POST" action="{{url('/my-profile/edit')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="info-block style-2">
                                    <div class="be-large-post-align "><h3 class="info-block-label">User Information</h3>
                                    </div>
                                </div>
                                <div class="be-large-post-align">
                                    <div class="be-change-ava">
                                        <a class="be-ava-user style-2" href="#" style="float: left;">
                                            <img src="{{asset('/').Auth::user()->imageUrl}}" alt="">
                                        </a>
                                        <input type="file" style="float: left;" class="btn color-4 size-2 hover-7" value="Insert Image" name="image">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="be-large-post-align">
                                    <div class="row">
                                        <div class="input-col col-xs-12 col-sm-6">
                                            <div class="form-group fg_icon focus-2">
                                                <div class="form-label">Name</div>
                                                <input name="name" class="form-input" type="text"
                                                       value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="input-col col-xs-12 col-sm-6">
                                            <div class="form-group focus-2">
                                                <div class="form-label">Email</div>
                                                <input name="email" class="form-input" type="email"
                                                       value="{{Auth::user()->email}}" readonly="">
                                            </div>
                                        </div>

                                        <div class="input-col col-xs-12 col-sm-6">
                                            <div class="form-label">City</div>
                                            <select name="city" class="be-custom-select" required>
                                                <option class="filter" value="{{Auth::user()->city}}">{{Auth::user()->city}}</option>
                                                <option value="Bagerhat">Bagerhat</option>
                                                <option value="Bandarban">Bandarban</option>
                                                <option value="Barguna">Barguna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Brammonbaria">Brammonbaria</option>
                                                <option value="Bogra">Bogra</option>
                                                <option value="Bhola">Bhola</option>
                                                <option value="Chandpur">Chandpur</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Chuadanga">Chuadanga</option>
                                                <option value="Comilla">Comilla</option>
                                                <option value="Cox's Bazar">Cox's Bazar</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Dinajpur">Dinajpur</option>
                                                <option value="Foridpur">Foridpur</option>
                                                <option value="Feni">Feni</option>
                                                <option value="Gaibanda">Gaibanda</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="Gopanganj">Gopanganj</option>
                                                <option value="Hobiganj">Hobiganj</option>
                                                <option value="Jaypurhat">Jaypurhat</option>
                                                <option value="Jamalpur">Jamalpur</option>
                                                <option value="Jessore">Jessore</option>
                                                <option value="Jhalokathi">Jhalokathi</option>
                                                <option value="Jhinaidaho">Jhinaidaho</option>
                                                <option value="Khagrachori">Khagrachori</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Kurigram">Kurigram</option>
                                                <option value="Kushtia">Kushtia</option>
                                                <option value="Lakshmipur">Lakshmipur</option>
                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Magura">Magura</option>
                                                <option value="Manikgonj">Manikgonj</option>
                                                <option value="Meherpur">Meherpur</option>
                                                <option value="Moluvibazar">Moluvibazar</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Naogaon">Naogaon</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Narsingdi">Narsingdi</option>
                                                <option value="Nator">Nator</option>
                                                <option value="Nawabgonj">Nawabgonj</option>
                                                <option value="Netrokona">Netrokona</option>
                                                <option value="Nilphamari">Nilphamari</option>
                                                <option value="Noakhali">Noakhali</option>
                                                <option value="Norail">Norail</option>
                                                <option value="Pabna">Pabna</option>
                                                <option value="Panchagar">Panchagar</option>
                                                <option value="Potuakhali">Potuakhali</option>
                                                <option value="Pirojpur">Pirojpur</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangamati">Rangamati</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Shatkhira">Shatkhira</option>
                                                <option value="Shariyatpur">Shariyatpur</option>
                                                <option value="Sherpur">Sherpur</option>
                                                <option value="Shirajgonj">Shirajgonj</option>
                                                <option value="Sunamgonj">Sunamgonj</option>
                                                <option value="Shylet">Shylhet</option>
                                                <option value="Tangail">Tangail</option>
                                                <option value="Thakurgaon">Thakurgaon</option>

                                            </select>
                                        </div>

                                        <div class="input-col col-xs-12 col-sm-6">
                                            <div class="form-group focus-2">
                                                <div class="form-label">Blood Group</div>
                                                <select name="blood_group" class="be-custom-select" required>
                                                    <option class="filter" value="{{Auth::user()->blood_group}}">{{Auth::user()->blood_group}}</option>
                                                    <option value="A+">A+</option>
                                                    <option  value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-col col-xs-12">
                                            <div class="form-group focus-2">
                                                <div class="form-label">Mobile</div>
                                                <input name="mobile" class="form-input" type="text" value="{{Auth::user()->mobile}}">
                                            </div>
                                        </div>

                                        <div class="input-col col-xs-12">
                                            <button type="submit" class="btn full size-1 hover-1"
                                                    style="background-color: #ff3d57">Update Profile
                                            </button>
                                        </div>
                                    </div>
                                </div>
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

@endsection