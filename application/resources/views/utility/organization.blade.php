@extends('layouts.app')
@section('title')
    <title>Save a Life</title>
@endsection


@section('content')
    <div id="content-block" class="gallery-block">
        <div class="custom-container gallery-container">
            <div class="container">
                @foreach($organizations as $organization)
                <div class="gallery-box clearfix">
                    <a class="gallery-a"  href="#"><img style="height: 132px; width: 225px;" src="{{$organization->organization_imageUrl}}" alt="img"></a>
                    <div class="gallery-info">
                        <h3>{{$organization->organization_name}}</h3>
                        <p>{{$organization->organization_location}}</p>
                        <p>{{$organization->organization_address}}</p>
                        <p>{{$organization->organization_contact}}</p>
                    </div>
                    <div class="gallery-btn">
                        <a class="btn-login btn color-1 size-2 hover-2" href="{{$organization->organization_followLink}}" target="_blank">
                            FOLLOW
                        </a>
                        <a class="btn-login btn color-1 size-2 hover-2" href="{{$organization->organization_followLink}}" target="_blank">
                            JOIN
                        </a>
                    </div>
                </div>
                    @endforeach
            </div>

        </div>
    </div>
@endsection

