@extends('layout.backend')

@section('content')
@foreach ($routine as $rout)
<div class="active list-group-item-action list-group-item back">
    {{ $rout->title }}&nbsp;&nbsp;
    <a href="/index/{{ $rout->id }}/edit" class="btn btn-danger">Edit</a>
@endforeach
</div>
@endsection