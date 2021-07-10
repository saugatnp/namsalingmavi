@extends('layout.app')

@section('content')
@foreach ($title as $titles)
    <h1 style="text-align: center; margin-top:50px;">{{$titles->title}} </h1>
@endforeach
    <div class="gallery">
        @foreach ($image as $key => $data)
            <tr>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="/storage/images/{{ $data->photo }}" alt="{{$titles->title}}" class="card-img" > --}}
                        <img src="{{ $data->photo }}" alt="{{$titles->title}}" class="card-img" >
                    </div>
                </div>
            </tr>
        @endforeach
    </div>


@endsection
