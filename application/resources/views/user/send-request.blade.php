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
                        @foreach($posts as $post)
                            @forelse($post->donors as $donor)
                                @if($donor->status == 1 )
                                    <div class="mix category-1 custom-column-5 disable-class">
                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/blood_drop.jpg" alt="">
                                            </a>
                                            <div class="be-user-counter">
                                                <div class="c_number">10</div>
                                                <div class="c_number">times</div>
                                            </div>
                                            <a href="#" class="be-use-name">{{$donor->user->name}}</a>
                                            <a href="#" class="be-use-name">{{$donor->user->city}}</a>
                                            <p >Contact Hidden</p>
                                            <p class="be-user-info">If you want, please contact with us.</p>
                                            <div class="be-text-tags">
                                                <h3 style="color: #f00;">
                                                    <b>{{$donor->user->blood_group}}</b>
                                                </h3>
                                            </div>
                                            <a class="btn btn-danger size-2 hover-1 cancel-donor" href="#"
                                               id="{{$donor->id}}">Cancel</a>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                donor not found
                            @endforelse
                        @endforeach
                        @foreach($posts as $post)
                            @forelse($post->donors as $donor)
                                @if($donor->status == 2 )
                                    <div class="mix category-2 custom-column-5">
                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/blood_drop.jpg" alt="">
                                            </a>
                                            <div class="be-user-counter">
                                                <div class="c_number">10</div>
                                                <div class="c_number">times</div>
                                            </div>
                                            <a href="#" class="be-use-name">{{$donor->user->name}}</a>
                                            <a href="#" class="be-use-name">{{$donor->user->city}}</a >
                                            <p >Contact: {{$donor->user->mobile}}</p>
                                            <p class="be-user-info">Please contact with this number.</p>
                                            <div class="be-text-tags">
                                                <h3 style="color: #f00;">
                                                    <b>{{$donor->user->blood_group}}</b>
                                                </h3>
                                            </div>
                                            <a style="float: left" class="btn btn-success size-2 complete-donor"
                                               href="#"
                                               id="{{$donor->id}}">Complete</a>
                                            <a style="float: right" class="btn btn-danger size-2 cancel-donor"
                                               href="#"
                                               id="{{$donor->id}}">Cancel</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                donor not found
                            @endforelse
                        @endforeach
                        @foreach($posts as $post)
                            @forelse($post->donors as $donor)
                                @if($donor->status == 3 )
                                    <div class="mix category-3 custom-column-5">
                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/blood_drop.jpg" alt="">
                                            </a>
                                            <div class="be-user-counter">
                                                <div class="c_number">10</div>
                                                <div class="c_number">times</div>
                                            </div>
                                            <a href="#" class="be-use-name">{{$donor->user->name}}</a>
                                            <a href="#" class="be-use-name">{{$donor->user->city}}</a>
                                            <p>{{$donor->user->mobile}}</p>
                                            <p class="be-user-info">You can contact with donor.</p>
                                            <div class="be-text-tags">
                                                <h3 style="color: #f00;">
                                                    <b>{{$donor->user->blood_group}}</b>
                                                </h3>
                                            </div>
                                            <a class="btn btn-danger size-2 hover-1 cancel-donor" href="#"
                                               id="">Completed</a>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                donor not found
                            @endforelse
                        @endforeach
                        @foreach($posts as $post)
                            @forelse($post->donors as $donor)
                                @if($donor->status == 0 )
                                    <div class="mix category-4 custom-column-5">
                                        <div class="be-user-block style-2">
                                            <a class="be-ava-user style-2" href="#">
                                                <img src="{{asset('/')}}assets/img/blood_drop.jpg" alt="">
                                            </a>
                                            <div class="be-user-counter">
                                                <div class="c_number">10</div>
                                                <div class="c_number">times</div>
                                            </div>
                                            <a href="#" class="be-use-name">{{$donor->user->name}}</a>
                                            <a href="#" class="be-use-name">{{$donor->user->city}}</a>
                                            <p >Contact Hidden</p>
                                            <p class="be-user-info">If you want, please contact with us.</p>
                                            <div class="be-text-tags">
                                                <h3 style="color: #f00;">
                                                    <b>{{$donor->user->blood_group}}</b>
                                                </h3>
                                            </div>
                                            <a class="btn btn-danger size-2 hover-1 cancel-donor" href="#"
                                               id="">Canceled</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                @endif
                            @empty
                                donor not found
                            @endforelse
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2 col-md-pull-10 left-feild">
                    <div class="be-vidget">
                        <h3 class="letf-menu-article">
                            Donor Status
                        </h3>
                        <div class="creative_filds_block">
                            <div class="ul">
                                <a data-filter=".category-1" class="filter">Pending Donor</a>
                                <a data-filter=".category-2" class="filter">Accept Donor</a>
                                <a data-filter=".category-3" class="filter">Complete Donor</a>
                                <a data-filter=".category-4" class="filter">Cancel Donor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
        <script>
            $(document).on('click', '.complete-donor', function () {
                var postdonor_id = $(this).attr("id");
                $(this).addClass('disabled');
                $.ajax({
                    url: "{{URL::to('complete-request')}}",
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
                        $('.disable-class').hide();
                    }
                })
            });
        </script>
        <script type="text/javascript">
            $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        </script>
@endsection

