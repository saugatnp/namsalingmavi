@extends('layout.app')

@section('content')
<div id=crousel>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        @foreach ($crouselone as $croone)
          <img src="{{asset('storage/images/'.$croone->image)}}" class="d-block w-100" style="opacity: 0.8;" alt="...">
          <div >
            <h1 class="carousel-content">{{$croone->title}}</h1>
          </div>
        @endforeach
      </div>
      <div class="carousel-item">
        @foreach ($crouseltwo as $crotwo)
        <img src="{{asset('storage/images/'.$crotwo->image)}}" class="d-block w-100" style="opacity: 0.8;"alt="...">
        <div >
            <h1 class="carousel-content">{{$croone->title}}</h1>
          </div>
        @endforeach
      </div>
      <div class="carousel-item">
        @foreach($crouselthree as $crothree)
        <img src="{{asset('storage/images/'.$crothree->image)}}" class="d-block w-100" style="opacity: 0.8;" alt="...">
        <div >
            <h1 class="carousel-content">{{$croone->title}}</h1>
          </div>
        @endforeach
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@foreach ($principalmsgs as $principalmsg)
        <div class="hm">
            <div class="circle">
            </div>
            <div class="mcontent">
                <div class="mpage">
                    <div class="himg">
                        <div class="pimg">
                            <img src="{{asset('storage/images/quote_open.png')}}" class="openquote">
                            <img src="{{ asset('storage/images/' . $principalmsg->image) }}"
                                class="hpimg">
                        </div>
                        <div class="hmsg">
                            <div class="ptext">{!! $principalmsg->value !!}</div>
                            <strong>
                                <p class="ptext"> {{ $principalmsg->title }}</p>
                            </strong>
                            <img src="{{asset('storage/images/quote_close.png')}}" class="closequote">
                        </div>
                        <div class="hid ">
                            <p class="ptext">{!! $principalmsg->value !!}</p>
                            <strong>
                                <p class="ptext"> {{ $principalmsg->title }}</p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
<div class="vl"></div>
<section class="wrapper-info">
  <div class="row">
      <div class="col-sm-3 info-div">
          <div>
               @foreach ($sectionone as $secone)
            <div class="info-img" >
              <img src="{{asset('storage/images/'.$secone->image)}}" class="info-img">
            </div>
            <div class="sectiontext">
                <h2>
                    {{$secone->title}}
                </h2>
                <p>
                    {!!$secone->value!!}
                </p>
            </div>
            @endforeach
          </div>
       </div>
      <div class="col-sm-3 info-div">
          <div>
              @foreach ($sectiontwo as $sectwo)
            <div class="info-img" style="align-content:center;">
              <img src="{{asset('storage/images/'.$sectwo->image)}}" class="info-img">
            </div>
            <div class="sectiontext">
                <h2>
                    {{$sectwo->title}}
                </h2>
                <p>
                    {!!$sectwo->value!!}
                </p>
            </div>
            @endforeach
          </div>
      </div>
      <div class="col-sm-3 info-div">
        <div >
            @foreach ($sectionthree as $secthree)
          <div class="info-img" >
            <img src="{{asset('storage/images/'.$secthree->image)}}" class="info-img">
          </div>
            <div class="sectiontext">
                <h2>
                    {{$secthree->title}}
                </h2>
                <p>
                    {!!$secthree->value!!}
                </p>
            </div>
            @endforeach
        </div>
    </div>
  </div>
</section>
<div class="vl"></div><br/>
<center><h1>Recent Events</h1></center>
<div class="nrecent">
        @foreach ($recentevent as $data)
        <div class="firstrecent">
            <div class="frimage">
                <img src="{{asset('storage/images/'.$data->image)}}" loading="lazy" class="rctimg" alt="recent image">
            </div>
            <div class="frtext">
                <div >
                    <h2 class="title">{{ $data->title }}</h2><br/>
                    <p>{!! $data->value !!}</p>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($recenteventtwo as $data)
        <div class="secondrecent">
            <div class="frimagetwo">
                <img src="{{asset('storage/images/'.$data->image)}}" loading="lazy" class="rctimg2" alt="recent image">
            </div>
            <div class="frtext">
                <div >
                    <h2 class="title">{{ $data->title }}</h2><br/>
                    <p>{!! $data->value !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div><br/>
    <br/><br/><br/>
    <div class="vl">
    </div>
      <div id="events">
        <div id="recentevents" class="col">
          <h1>Location</h1>
          <div class="event-div">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.3321884639365!2d87.99747959785864!3d26.924790424670118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65a7e0cb4c814866!2sNamsaling%20Academy!5e0!3m2!1sen!2snp!4v1624433481047!5m2!1sen!2snp" class="map"></iframe>
            </div>
          </div>
        </div>
        <div class="motto">
            <center>
                <h1 class="nepali nepali-top">श्री नामसालिङ माध्यमिक विद्यालय</h1>
                <h4 class="nepali nepali-bottom">"सबैलाई शिक्षा आजको आवश्यकता"</h4>
            </center>
            <div class="motto-circle">
            </div>
            <div class="motto-circletwo">
            </div>
        </div>
    </div>
@endsection
