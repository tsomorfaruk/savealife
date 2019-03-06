@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <br>
        <br>

        <div class="container-fluid cd-main-content custom-container">
            <div class="row">
                <div class="col-md-10 text-center" style="float: none; margin: 0 auto">
                    <div class="for-be-dropdowns">
                        <form  action="{{url('/search-donor')}}" method="get">
                            @csrf
                            <select name="blood_group" class="be-drop-down">
                                <option class="filter" value="" disabled selected>Blood Group</option>
                                <option value="A+" style="min-height: 15cm;">A+</option>
                                <option  value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>

                            <select name="city" class="be-drop-down">
                                <option class="filter" value="" disabled selected>City</option>
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
                            <input type="submit" class="be-drop-down" name="submit" value="Search">
                        </form>
                    </div>
                </div>

                <div class="custom-container gallery-container">
                    <div class="container">
                            <div class="gallery-info">
                                <h3 style="text-align: center"><p>{{ Session::get('message') }}</p></h3>
                            </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

