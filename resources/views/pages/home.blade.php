@extends('layout.app')

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0"
        nonce="wv0cgsb1"></script>
    <div id=crousel>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @foreach ($crouselone as $croone)

                        <img src="{{ asset('storage/images/' . $croone->image) }}" class="d-block w-100"
                            style="opacity: 0.8;" alt="...">
                        <div class="carousel-content">
                            {{ $croone->title }}
                        </div>
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach ($crouseltwo as $crotwo)
                        <img src="{{ asset('storage/images/' . $crotwo->image) }}" class="d-block w-100"
                            style="opacity: 0.8;" alt="...">
                        <div class="carousel-content">
                            {{ $crotwo->title }}
                        </div>
                    @endforeach
                </div>
                <div class="carousel-item">
                    @foreach ($crouselthree as $crothree)
                        <img src="{{ asset('storage/images/' . $crothree->image) }}" class="d-block w-100"
                            style="opacity: 0.8;" alt="...">
                        <div class="carousel-content">
                            {{ $crothree->title }}
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    @foreach ($principalmsgs as $principalmsg)
        <div class="hm">
            <div class="mcontent">
                <div class="mpage">
                    <div class="himg">
                        <div class="pimg">
                            <img src="https://www.alverno.edu/images/quote_open.png" class="openquote">
                            <img src="{{ asset('storage/images/' . $principalmsg->image) }}" class="hpimg">
                        </div>
                        <div class="hmsg">
                            <p class="ptext">{!! $principalmsg->value !!}</p>
                            <strong>
                                <p class="ptext"> {{ $principalmsg->title }}</p>
                            </strong>
                            <img src="	https://www.alverno.edu/images/quote_close.png" class="closequote">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- <div id="welcome">
        <div id="welcome-msg">
            <h1>Welcome to <br /> <strong>Namsaling Higher Secondary School </strong></h1>
            <br />

            @foreach ($principalmsgs as $principalmsg)
                <h3>{{ $principalmsg->title }}</h3>
                {!! $principalmsg->value !!}


        </div>
        <div style="text-align: center;">
            <div id="welcome-img">
                <img src="{{ asset('storage/images/' . $principalmsg->image) }}" class="principalimage">
                @endforeach
            </div>
            <strong>Pradeep Kumar Dev, Principal</strong>
        </div>
    </div> --}}
    <div class="vl"></div>
    <section class="wrapper-info">
        <div class="row">
            <div class="col-sm-3 info-div">
                <div>
                    @foreach ($sectionone as $secone)
                        <div class="info-img">

                            <img src="https://namsalingmavi.edu.np/storage/images/FILE_1626065656.jpeg" class="info-img">
                            {{-- <img src="{{asset('storage/images/'.$secone->image)}}" class="info-img"> --}}
                        </div>
                        <div class="sectiontext">
                            <h2>
                                {{ $secone->title }}
                            </h2>
                            <p>
                                {!! $secone->value !!}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>

            <div class="col-sm-3 info-div">
                <div>
                    @foreach ($sectiontwo as $sectwo)
                        <div class="info-img" style="align-content:center;">
                            <img src="{{ asset('storage/images/' . $sectwo->image) }}" class="info-img">
                        </div>
                        <div class="sectiontext">
                            <h2>
                                {{ $sectwo->title }}
                            </h2>
                            <p>
                                {!! $sectwo->value !!}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-sm-3 info-div">
                <div>
                    @foreach ($sectionthree as $secthree)
                        <div class="info-img">
                            <img src="{{ asset('storage/images/' . $secthree->image) }}" class="info-img">
                        </div>
                        <div class="sectiontext">
                            <h2>
                                {{ $secthree->title }}
                            </h2>
                            <p>
                                {!! $secthree->value !!}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    
    <div class="nrecent">
        @foreach ($recentevent as $data)
        <div class="firstrecent">
            <div class="frimage">
                <img src="https://www.nd.edu/assets/images/home/pillar-research-1600.jpg" loading="lazy" class="rctimg">
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
                <img src="{{$data->image}}" loading="lazy" class="rctimg2">
            </div>
            <div class="frtext">
                <div >
                    <h2 class="title">{{ $data->title }}</h2><br/>
                    <p>{!! $data->value !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div id="events">
        <div id="recentevents" class="col">
            <h1>Recent Events</h1>
            <div class="info-div">
                <div>
                    @foreach ($recentevent as $recevt)
                        <div class="info-img">
                            <img src="https://namsalingmavi.edu.np/storage/images/FILE_1626063714.jpg" class="info-img">
                        </div>
                        <div class="sectiontext">
                            <h2>
                                {{ $recevt->title }}
                            </h2>
                            <p>
                                {!! $recevt->value !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="calendar">
            <h1>Today's date</h1>
            <iframe src="https://calendar-nepali.com/clockwidget/nepali-time-and-date.php" frameborder="0" scrolling="no"
                marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:200px; height:220px;"
                allowtransparency="true"></iframe>
        </div>
        <div class="col facebook col-md-6 col-lg-4 mb-3">
            <h1>Facebook</h1>
            <div class="fb-page col" data-href="https://www.facebook.com/Namsaling-secondary-school-1039472906234748"
                data-tabs="timeline" data-width="" data-height="" data-small-header="false"
                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/Namsaling-secondary-school-1039472906234748"
                    class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/Namsaling-secondary-school-1039472906234748">
                        Namsaling secondary school
                    </a>
                </blockquote>
            </div>
        </div>
    </div>
    <div id="events">
        <div id="recentevents" class="col">
            <h1>Location</h1>
            <div class="event-div">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.3321884639365!2d87.99747959785864!3d26.924790424670118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65a7e0cb4c814866!2sNamsaling%20Academy!5e0!3m2!1sen!2snp!4v1624433481047!5m2!1sen!2snp"
                        class="map"></iframe>
                </div>
            </div>
        </div>
        {{-- <div id="calendar" class="col">
          
      </div> --}}
    @endsection
