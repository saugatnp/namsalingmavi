@extends('layout.app')

@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="wv0cgsb1"></script>
<div id=crousel>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        @foreach ($crouselone as $croone)
          <img src="{{$croone->image}}" class="d-block w-100" style="opacity: 0.8;" alt="...">
          <div class="carousel-content">
            {{$croone->title}}
          </div>
        @endforeach
      </div>
      <div class="carousel-item">
        @foreach ($crouseltwo as $crotwo)
        <img src="{{$crotwo->image}}" class="d-block w-100" style="opacity: 0.8;"alt="...">
        <div class="carousel-content">
          {{$crotwo->title}}
        </div>
        @endforeach
      </div>
      <div class="carousel-item">
        @foreach($crouselthree as $crothree)
        <img src="{{$crothree->image}}" class="d-block w-100" style="opacity: 0.8;" alt="...">
        <div class="carousel-content">
          {{$crothree->title}}
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
<div id="welcome">
  <div id="welcome-msg">
    <h1>Welcome to <br/> <strong>Namsaling Higher Secondary School </strong></h1>
    <br/>
    
      @foreach ($principalmsgs as $principalmsg)
        <h3>{{$principalmsg->title}}</h3>
        {!!$principalmsg->value!!}
      @endforeach
    
    </div>
  <div style="text-align: center;">
    <div id="welcome-img">
      <img src="https://mymodernmet.com/wp/wp-content/uploads/2021/01/morphy-me-celebrity-face-mashups-15.jpg" class="principalimage">
    </div>
    <strong>Pradeep Kumar Dev, Principal</strong>
  </div>
</div>
<section class="wrapper-info">
  <div class="row">
      <div class="col-sm-4 info-div">
          <div>
            <div class="info-img" style=" center;">
              <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
            </div>
            @foreach ($sectionone as $secone)
            <h2>
                {{$secone->title}}
            </h2>
            <p>
                {!!$secone->value!!}
            </p>
            @endforeach
          </div>
         
      </div>
     
      <div class="col-sm-4 info-div">
          <div>
            <div class="info-img" style=" center;">
              <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
            </div>
            @foreach ($sectiontwo as $sectwo)
            <h2>
                {{$sectwo->title}}
            </h2>
            <p>
                {!!$sectwo->value!!}
            </p>
            @endforeach
          </div>
          
      </div>
      <div class="col-sm-4 info-div">
        <div >
          <div class="info-img" >
            <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
          </div>
          @foreach ($sectionthree as $secthree)
            <h2>
                {{$secthree->title}}
            </h2>
            <p>
                {!!$secthree->value!!}
            </p>
            @endforeach
      </div>
      
        </div>
  </div>
</section>
      <div id="events">
        <div id="recentevents" class="col">
          <h1>Recent Events</h1>
          <div class="event-div">
            <div >
              <div class="info-img" >
                <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
              </div>
              @foreach ($recentevent as $recevt)
            <h2>
                {{$recevt->title}}
            </h2>
            <p>
                {!!$recevt->value!!}
            </p>
            @endforeach
            </div>
          </div>
        </div>
        <div id="calendar" >
          <h1>Today's date</h1>
            <iframe src="https://calendar-nepali.com/clockwidget/nepali-time-and-date.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:200px; height:220px;" allowtransparency="true"></iframe>                      
        </div>
        <div class="col facebook col-md-6 col-lg-4 mb-3">
          <h1>Facebook</h1>
          <div class="fb-page col" data-href="https://www.facebook.com/Namsaling-secondary-school-1039472906234748" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Namsaling-secondary-school-1039472906234748" class="fb-xfbml-parse-ignore">
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.3321884639365!2d87.99747959785864!3d26.924790424670118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65a7e0cb4c814866!2sNamsaling%20Academy!5e0!3m2!1sen!2snp!4v1624433481047!5m2!1sen!2snp" class="map"></iframe>
            </div>
          </div>
        </div>
        {{-- <div id="calendar" class="col">
          
      </div> --}}
@endsection
