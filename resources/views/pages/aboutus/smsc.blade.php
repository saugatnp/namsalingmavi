@extends('layout.app')

@section('content')
<div class="row heading heading-icon">
  <h2>बिध्यालय ब्यावस्थापन समिति</h2>
</div>

        <section class="our-webcoderskull padding-lg">
          
  <div class="container">
    
    
    <ul class="row">
      @foreach($smc as $data)
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{$data->image}}" class="img-responsive" alt=""></figure>
            <h3><a href="#">{{$data->title}}</a></h3>
            <p>{{$data->value}}</p>
            
          </div>
      </li>
      {{-- <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Manish </a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
      </li>
     
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            
          </div>
      </li> --}}
      @endforeach
    </ul>
  
  </div>

</section>

        @endsection