@extends('layout.backend')

@section('content')

<div class="back">
    <h1>Backend Home</h1>
    
        @foreach ($crouselone as $croone)
            {{$croone->title}}
            <a class="btn btn-success button5"  href="/home/{{$croone->id}}/edit" >Edit</a>
        @endforeach
        <br/><br/>
        @foreach ($crouseltwo as $crotwo) 
            {{$crotwo->title}}
            <a class="btn btn-success button5" href="/home/{{$crotwo->id}}/edit" >Edit</a>
        @endforeach
        <br/><br/>
        @foreach ($crouselthree as $crothree)
            {{$crothree->title}}
            <a class="btn btn-success button5" href="/home/{{$crothree->id}}/edit" >Edit</a>
        @endforeach
        <br/><br/>
        @foreach ($principalmsgs as $pmsg)
            {{$pmsg->title}}&nbsp;
            <a  class="btn btn-success button5" href="/home/{{$pmsg->id}}/edit">Edit</a>
        @endforeach
        <br/><br/>
        @foreach ($sectionone as $secone)
            {{$secone->title}}
            <a  class="btn btn-success button5" href="/home/{{$secone->id}}/edit">Edit</a>
        @endforeach
        <br/><br/>
        @foreach ($sectiontwo as $sectwo)
            {{$sectwo->title}}
            <a class="btn btn-success button5" href="/home/{{$sectwo->id}}/edit">Edit</a>
        @endforeach     
        <br/><br/>

        @foreach ($sectionthree as $secthree)
            {{$secthree->title}}
            <a  class="btn btn-success button5" href="/home/{{$secthree->id}}/edit">Edit</a>
        @endforeach
<br/><br/>
        @foreach ($recentevent as $rctevt)
            {{$rctevt->title}}
            <a  class="btn btn-success button5" href="/home/{{$rctevt->id}}/edit">Edit</a>
        @endforeach
</div>
@endsection