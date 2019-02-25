@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block">
        <br>
        <br>
        <div class="container-fluid custom-container">
            <div class="row">

                <div class="container-fluid custom-container">
                    <div class="row">
                        <div class="col-md-10 col-md-push-2">
                            <div id="container-mix" class="be-user-wrapper row">
                                @foreach($donor_list as $donor)
                                    @foreach($donor as $donor_description)
                                        <div class="mix category-4 custom-column-5">
                                            <div class="be-user-block style-2">
                                                <a class="be-ava-user style-2" href="#">
                                                    <img src="{{asset('/')}}assets/img/blood_drop.jpg" alt="">
                                                </a>
                                                <div class="be-user-counter">
                                                    <div class="c_number">10</div>
                                                    <div class="c_text">times</div>
                                                </div>
                                                <a href="#" class="be-use-name">{{$donor_description->name}}</a>
                                                <p class="be-user-info">{{$donor_description->city}} </p>
                                                <div class="be-text-tags">
                                                    <h3 style="color: #f00;">
                                                        <b>{{$donor_description->blood_group}}{{$donor->postdonor->id}}</b>
                                                    </h3>
                                                </div>
                                                <a class="btn color-1 size-2 hover-1 search-donor" href="#"
                                                   id="">Cancel</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '.search-donor', function () {
            var donor_id = $(this).attr("id");
            var post_id = $('#post_id').attr("value");
            $(this).addClass('disabled');
            $.ajax({
                url: "{{URL::to('request')}}",
                method: 'get',
                data: {
                    id: donor_id,
                    post_id: post_id,
                    '_token': $('input[name=_token]').val(),
                },
                dataType: 'json',
                success: function (data) {
                    $(this).removeClass('disabled');
                }
            })
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
    </script>
@endsection

