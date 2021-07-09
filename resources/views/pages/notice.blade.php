@extends('layout.app')

@section('content')
    <h1 style="text-align:center;"><strong> Notice Board</strong></h1>
    <center>
        <div class="notice">
            @foreach ($notice as $key => $data)
                <div class="contents">
                    <p>{{ $data->title }}</p>
                    <p class="dtt">2020/2/3</p>
                    <a href="/notice/viewdetails/{{$data->id}}"><button class="btn btn-primary">View Details</button></a>
                </div>
                <hr />
            @endforeach
    </center>




@endsection
