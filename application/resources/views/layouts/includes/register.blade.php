<div class="large-popup register">
    <div class="large-popup-fixed"></div>
    <div class="container large-popup-container">
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-times close-button"></i>
                        <h5 class="large-popup-title">Register</h5>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url'=>'register', 'method'=>'POST', 'name'=>'RegForm']) !!}
                    @csrf
                        <div class="col-md-6">
                            <input class="input-signtype" type="text" name="name" required="" placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="text" name="mobile" required placeholder="Mobile">
                        </div>
                        <div class="col-md-6">
                            <div class="be-custom-select-block">
                                <select class="be-custom-select" name="city" required>
                                    <option value="" disabled selected>
                                        City
                                    </option>
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
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="email" name="email" required="" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="password" required="" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="password" name="password_confirmation" required="" placeholder="Repeat Password">
                        </div>
                        <div class="col-md-12 be-date-block">
							<span class="large-popup-text">
								Blood Group
							</span>

                            <div class="be-custom-select-block">
                                <select class="be-custom-select" name="blood_group" required>
                                    <option value="" disabled selected>
                                        Blood Group
                                    </option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="be-checkbox">
                                <label class="check-box">
                                    <input class="checkbox-input" type="checkbox" required="" value="" > <span class="check-box-sign"></span>
                                </label>
                                <span class="large-popup-text">
									I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
								</span>
                            </div>
                            <div class="be-checkbox">
                                <label class="check-box">
                                    <input class="checkbox-input" type="checkbox" value="" > <span class="check-box-sign"></span>
                                </label>
                                <span class="large-popup-text">
									Send me notifications
								</span>
                            </div>
                        </div>
                        <div class="col-md-6 for-signin">
                            <input type="submit" class="be-popup-sign-button" value="SIGN IN">
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
