@extends('layout.app')

@section('content')
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h1 class="text-center">Our Excellent Faculty</h1>
        </div>
        <div class="row people">
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    @foreach($principal as $data)
                    <img class="rounded-circle" data-bs-hover-animate="pulse" src="{{$data->image}}">
                    <h3 class="name">{{$data->title}}</h3>
                    <p class="title">{!!$data->value!!}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    @foreach($viceprincipal as $data)
                    <img class="rounded-circle" data-bs-hover-animate="pulse" src="{{$data->image}}">
                    <h3 class="name">{{$data->title}}</h3>
                    <p class="title">{{$data->value}}</p>    
                    @endforeach
                </div>
            </div>
            @foreach($teach as $data)
            <div class="col-md-4 col-lg-3 item">
                <div class="box">
                    
                    <img class="rounded-circle" data-bs-hover-animate="pulse" src="{{$data->image}}">
                    <h3 class="name">{{$data->title}}</h3>
                    <p class="title">{!!$data->value!!}</p>  
                      
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
        @endsection