@extends('layout.app')

@section('content')
        <div class="exam-routine">
                
                <div class="col-md-8">
                        @foreach($routine as $rout)
                        <h1> {{$rout->title}} </h1>
                        <p> {{$rout->value}}
                        </p>
                        <img src="{{$rout->image}}" width="100%">
                        @endforeach
                </div>

        </div>

@endsection