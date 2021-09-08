@extends('layout.app')

@section('content')
<div >
    
    @foreach($detail as $data)
    <h5 style="text-align:center; margin-top:30px;">{{ $data->title }}</h5></br></br>
<center><img class="photo" src="{{asset('storage/images/'.$data->image)}}"></center>


@endforeach


</div>





@endsection