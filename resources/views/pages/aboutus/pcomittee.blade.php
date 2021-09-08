@extends('layout.app')

@section('content')
<div class="row heading heading-icon">
  <h2>बिध्यालय ब्यावस्थापन समिति  (पूर्व अध्यक्ष)</h2>
   
</div>
        <section class="our-webcoderskull padding-lg">
          
  <div class="container">
    <ul class="row">
      @foreach($pcomittee as $data)
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{$data->image}}" class="img-responsive" alt=""></figure>
            <h3><a href="#">{{$data->title}}</a></h3>
            <p>{{$data->value}}</p>
            
          </div>
      </li>
      @endforeach
    </ul>
  
  </div>

</section>

        @endsection