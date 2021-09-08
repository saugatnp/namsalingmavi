@extends('layout.app')

@section('content')
@foreach($post as $data)
<h3 style="text-align:center; margin-top:50px;">{{$data->title}}</h3>
<section class="wrapper-info">
  <div class="row people">
      <div class="col-sm-5 info-div ">
          <div>
            <div class="info-img" style="align-content:center;">
              <img src="{{asset('storage/images/'.$data->image)}}" class="info-img">
            </div>&nbsp;
          </div>
      </div>
     
      <div class="col-sm-5 info-div">
        <div style="margin:25px;">
          <p >
            {!!$data->value!!}      
          </p>
        </div>
      </div>
  </div>
         
</section>
     @endforeach   
 @endsection