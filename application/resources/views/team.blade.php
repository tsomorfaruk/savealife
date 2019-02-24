@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <div class="container">
            <div class="about-description">
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <div class="about-text">Duis pretium diam auctor velit tempus imperdiet. Duis velit ipsum, consequat
                            vitae bibendum in, vestibulum sit amet turpis. Fusce venenatis egestas ultrices. Nam nec
                            porttitor metus. Ut eros arcu, pretium at nunc eu, vulputate efficitur tellus. Vivamus tempus
                            sem et metus euismod, a facilisis est egestas. Ut nunc eros, suscipit vitae tincidunt ut,
                            dapibus a eros. Cras euismod dui sapien.Vestibulum varius ultrices arcu. Sed semper leo ex, sit
                            amet rutrum est blandit sit amet. Ut magna neque, congue at augue eget, ullamcorper luctus
                            ligula. Cras scelerisque nisi at nibh gravida consectetur. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Ut sit amet nulla nunc. Curabitur risus sapien, convallis non
                            tortor eget, interdum tempus ligula.
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <h3 class="block-title">Our Team As They Are</h3>
                <div class="block-subtitle">Cras vel dui tempor lorem ultrices eleifend non nec enim. Aliquam condimentum at
                    diam vitae vulputate.
                </div>
                <div class="row">
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="img-responsive img-full" src="{{asset('/')}}assets/img/team_1.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Marcus Finderman</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Art Director</a>,
                                <a href="blog-detail-2.html" class="be-post-tag">Creative Designer</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="img-responsive img-full" src="{{asset('/')}}assets/img/team_2.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Boney mcFannin</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Web Developer</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="img-responsive img-full" src="{{asset('/')}}assets/img/team_5.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Jerremy Dawson</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Illustrator</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-ml-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="team-entry">
                            <a href="blog-detail-2.html"><img class="img-responsive img-full" src="{{asset('/')}}assets/img/team_4.jpg"
                                                              alt=""></a>
                            <h4 class="team-name">Jhon Makauer</h4>
                            <div class="team-position">
                                <a href="blog-detail-2.html" class="be-post-tag">Manager</a>
                            </div>
                            <div class="team-social">
                                <a href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
                                <a href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="block">
                <h3 class="block-title">Services</h3>
                <div class="block-subtitle">Nulla id risus urna. Ut commodo leo quis</div>

                <div class="swiper-container" data-autoplay="5000" data-loop="0" data-speed="300" data-center="0"
                     data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                     data-lg-slides="3" data-add-slides="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-val="0">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_1.png" alt="">
                                <h4 class="service-title">Ideas for everyone</h4>
                                <div class="service-text">Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac
                                    elementum auctor, dui nisl placerat odio
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_2.png" alt="">
                                <h4 class="service-title">Developing pages</h4>
                                <div class="service-text">Fusce id euismod diam, quis venenatis ipsum. Quisque lacinia non
                                    dui id fermentum. Ut libero nulla, auctor nec
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="2">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_3.png" alt="">
                                <h4 class="service-title">Easy in touch</h4>
                                <div class="service-text">Curabitur tincidunt eros et felis eleifend, sed pharetra leo
                                    scelerisque. In accumsa
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="3">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_1.png" alt="">
                                <h4 class="service-title">Ideas for everyone</h4>
                                <div class="service-text">Morbi efficitur feugiat erat a efficitur. Donec interdum, nunc ac
                                    elementum auctor, dui nisl placerat odio
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="4">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_2.png" alt="">
                                <h4 class="service-title">Developing pages</h4>
                                <div class="service-text">Fusce id euismod diam, quis venenatis ipsum. Quisque lacinia non
                                    dui id fermentum. Ut libero nulla, auctor nec
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="5">
                            <div class="service-entry">
                                <img class="service-icon" src="img/service_3.png" alt="">
                                <h4 class="service-title">Easy in touch</h4>
                                <div class="service-text">Curabitur tincidunt eros et felis eleifend, sed pharetra leo
                                    scelerisque. In accumsa
                                </div>
                                <a class="btn color-1 size-2 hover-1">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="info-blocks">
                <div class="info-entry left table-block">
                    <div class="row table-row">
                        <div class="table-cell col-xs-12 col-sm-6">
                            <img class="img-responsive img-full" src="img/info_block_1.jpg" alt="">
                        </div>
                        <div class="table-cell col-xs-12 col-sm-6">
                            <div class="info-text">
                                <h3 class="block-title">Work With Us</h3>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <h4>Why our team</h4>
                                        <p>Aliquam id rhoncus enim, non malesuada dui. Phasellus at orci sed justo pharetra
                                            aliquet sed non urna. Aliquam erat volutpat. Cras feugiat ullamcorper nunc id
                                            tempor. Etiam et sapien consectetur, vehicula purus quis, ultrices lectus.
                                            Praesent congue lectus sit amet eros sagittis consequat. Phasellus nec diam non
                                            enim condimentum dapibus id non ligula. Sed euismod vitae odio vitae
                                            condimentum.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <h4>Your career</h4>
                                        <p>Proin ullamcorper nibh eget posuere congue. Nullam mollis tempus dictum.
                                            Suspendisse nisl dui, sollicitudin vel massa ac, luctus suscipit enim. Morbi
                                            vehicula massa a metus dapibus, et mattis ex aliquet.</p>

                                        <p>Suspendisse potenti. Etiam congue, lectus in euismod facilisis, diam odio
                                            vulputate mauris, nec accumsan nulla libero vitae velit. In hac habitasse platea
                                            dictumst.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-entry right table-block">
                    <div class="row table-row">
                        <div class="table-cell col-xs-12 col-sm-6">
                            <div class="info-text">
                                <h3 class="block-title">Work With Us</h3>
                                <h4><i class="fa fa-camera"></i> Photoshoot as work</h4>
                                <p>Aliquam id rhoncus enim, non malesuada dui. Phasellus at orci sed justo pharetra aliquet
                                    sed non urna. Aliquam erat volutpat. Cras feugiat ullamcorper nunc id tempor. Etiam et
                                    sapien consectetur, vehicula purus quis, ultrices lectus. Praesent congue lectus sit
                                    amet eros sagittis consequat. Phasellus nec diam non enim condimentum dapibus id non
                                    ligula. Sed euismod vitae odio vitae condimentum.</p>

                                <h4><i class="fa fa-thumb-tack"></i> Pushpin to desk in a room</h4>
                                <p>Proin ullamcorper nibh eget posuere congue. Nullam mollis tempus dictum. Suspendisse nisl
                                    dui, sollicitudin vel massa ac, luctus suscipit enim. Morbi vehicula massa a metus
                                    dapibus, et mattis ex aliquet.</p>

                                <p>Suspendisse potenti. Etiam congue, lectus in euismod facilisis, diam odio vulputate
                                    mauris, nec accumsan nulla libero vitae velit. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>
                        <div class="table-cell col-xs-12 col-sm-6">
                            <img class="img-responsive img-full" src="img/info_block_2.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="team-block block">
                <h3 class="block-title">Testimonials</h3>
                <div class="block-subtitle">Curabitur tincidunt eros et felis eleifend, sed pharetra leo scelerisque.</div>
                <div class="swiper-container" data-autoplay="5000" data-loop="0" data-speed="300" data-center="0"
                     data-slides-per-group="2" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                     data-md-slides="2" data-lg-slides="2" data-add-slides="2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonals-block">
                                <div class="testimonals-entry">
                                    <img class="testimonals-img" src="img/testimonals_1.jpg" alt="">
                                    <div class="testimonals-name">Samara Kechton</div>
                                    <div class="testimonals-text profes">Make-up designer</div>
                                    <div class="testimonals-text">Nulla id risus urna. Ut commodo leo quis dolor
                                        sollicitudin, nec elementum ipsum porta. Duis in nisi nisi. Vestibulum in mauris
                                        vitae odio sagittis interdum a ut purus. Suspendisse in molestie leo, at pulvinar
                                        massa. Aenean convallis nunc eros, nec efficitur nulla congue sed
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonals-block">
                                <div class="testimonals-entry">
                                    <img class="testimonals-img" src="img/testimonals_2.jpg" alt="">
                                    <div class="testimonals-name">Jhon Makauer</div>
                                    <div class="testimonals-text profes">Philosopher</div>
                                    <div class="testimonals-text">Phasellus sem massa, scelerisque at libero sit amet,
                                        laoreet placerat erat. Donec dictum sapien ac accumsan luctus. Fusce id euismod
                                        diam, quis venenatis ipsum.Quisque lacinia non dui id fermentum. Ut libero nulla
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonals-block">
                                <div class="testimonals-entry">
                                    <img class="testimonals-img" src="img/testimonals_1.jpg" alt="">
                                    <div class="testimonals-name">Samara Kechton</div>
                                    <div class="testimonals-text profes">Make-up designer</div>
                                    <div class="testimonals-text">Nulla id risus urna. Ut commodo leo quis dolor
                                        sollicitudin, nec elementum ipsum porta. Duis in nisi nisi. Vestibulum in mauris
                                        vitae odio sagittis interdum a ut purus. Suspendisse in molestie leo, at pulvinar
                                        massa. Aenean convallis nunc eros, nec efficitur nulla congue sed
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonals-block">
                                <div class="testimonals-entry">
                                    <img class="testimonals-img" src="img/testimonals_2.jpg" alt="">
                                    <div class="testimonals-name">Jhon Makauer</div>
                                    <div class="testimonals-text profes">Philosopher</div>
                                    <div class="testimonals-text">Phasellus sem massa, scelerisque at libero sit amet,
                                        laoreet placerat erat. Donec dictum sapien ac accumsan luctus. Fusce id euismod
                                        diam, quis venenatis ipsum.Quisque lacinia non dui id fermentum. Ut libero nulla
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">

                    </div>
                </div>
            </div>
            <div class="clients-block">
                <div class="row">
                    <div class="col-xs-4 col-sm-2">
                        <img class="img-responsive img-full" src="img/client_1.jpg" alt="">
                    </div>
                    <div class="col-xs-4  col-sm-2">
                        <img class="img-responsive img-full" src="img/client_2.jpg" alt="">
                    </div>
                    <div class="col-xs-4  col-sm-2">
                        <img class="img-responsive img-full" src="img/client_3.jpg" alt="">
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-xs-4  col-sm-2">
                        <img class="img-responsive img-full" src="img/client_4.jpg" alt="">
                    </div>
                    <div class="col-xs-4  col-sm-2">
                        <img class="img-responsive img-full" src="img/client_5.jpg" alt="">
                    </div>
                    <div class="col-xs-4  col-sm-2">
                        <img class="img-responsive img-full" src="img/client_6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

