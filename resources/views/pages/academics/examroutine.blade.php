@extends('layout.app')

@section('content')
        <div class="exam-routine">
                
                <div class="col-md-8">
                        @foreach ($routine as $key => $data)
                        <h1> {{$data->title}} </h1>
                        <p> {!!$data->value!!}
                        </p>
                        <img src="{{asset('storage/images/'.$data->image)}}" width="100%">
                        @endforeach
                </div>

        </div>

@endsection