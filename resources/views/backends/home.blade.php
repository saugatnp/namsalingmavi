@extends('layout.backend')

@section('content')

<div>
    <h1>backend home</h1>
        @foreach ($crouselone as $croone)
            {{$croone->title}}
            <a href="/home/{{$croone->id}}/edit" >Edit</a>
        @endforeach
<br/>
        @foreach ($crouseltwo as $crotwo)
            {{$crotwo->title}}
            <a href="/home/{{$crotwo->id}}/edit" >Edit</a>
        @endforeach
        <br/>
        @foreach ($crouselthree as $crothree)
            {{$crothree->title}}
            <a href="/home/{{$crothree->id}}/edit" >Edit</a>
        @endforeach
        <br/>
        @foreach ($principalmsgs as $pmsg)
            {{$pmsg->title}}
            <a href="/home/{{$pmsg->id}}/edit">Edit</a>
        @endforeach
        <br/>
        @foreach ($sectionone as $secone)
            {{$secone->title}}
            <a href="/home/{{$secone->id}}/edit">Edit</a>
        @endforeach
        <br/>
        @foreach ($sectiontwo as $sectwo)
            {{$sectwo->title}}
            <a href="/home/{{$sectwo->id}}/edit">Edit</a>
        @endforeach     
        <br/>
        @foreach ($sectionthree as $secthree)
            {{$secthree->title}}
            <a href="/home/{{$secthree->id}}/edit">Edit</a>
        @endforeach
<br/>
        @foreach ($recentevent as $rctevt)
            {{$rctevt->title}}
            <a href="/home/{{$rctevt->id}}/edit">Edit</a>
        @endforeach
</div>
@endsection