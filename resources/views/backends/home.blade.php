@extends('layout.backend')

@section('content')

<div class="mainback">
    <h1>Backend Home</h1>
    <div class="back">
        <table cellpadding="0" style="width:100%;border: 1px solid black;">
            <tr>
                <th>S.N.</th>
                <th>Title</th> 
                <th>Action</th>
              </tr>
              <tr>
            @foreach ($crouselone as $croone)
            <td></td>
                <td>{{$croone->title}}</td>
                <td><a class="btn btn-success button5"  href="/index/{{$croone->id}}/edit" >Edit</a></td>
            @endforeach
              </tr>
            <tr>
            @foreach ($crouseltwo as $crotwo) 
            <td></td>
                <td>{{$crotwo->title}}</td>
                <td><a class="btn btn-success button5"  href="/index/{{$crotwo->id}}/edit" >Edit</a></td>
            @endforeach
                </tr>
            <tr>
            @foreach ($crouselthree as $crothree)
            <td></td>
                <td>{{$crothree->title}}</td>
               <td> <a class="btn btn-success button5"  href="/index/{{$crothree->id}}/edit" >Edit</a></td>
            @endforeach
            </tr>
            <tr>
            @foreach ($principalmsgs as $pmsg)
            <td></td>
                <td>{{$pmsg->title}}</td>
               <td> <a class="btn btn-success button5"  href="/index/{{$pmsg->id}}/edit" >Edit</a></td>
            @endforeach
            </tr>
            <tr>
            @foreach ($sectionone as $secone)
            <td></td>
                <td>{{$secone->title}}</td>
               <td> <a class="btn btn-success button5"  href="/index/{{$secone->id}}/edit" >Edit</a></td>
            @endforeach
            </tr>
           <tr>
            @foreach ($sectiontwo as $sectwo)
            <td></td>
                <td>{{$sectwo->title}}</td>
                <td><a class="btn btn-success button5"  href="/index/{{$sectwo->id}}/edit" >Edit</a></td>
            @endforeach 
           </tr>    
            <tr>
    
            @foreach ($sectionthree as $secthree)
            <td></td>
                <td>{{$secthree->title}}</td>
                <td><a class="btn btn-success button5"  href="/index/{{$secthree->id}}/edit" >Edit</a></td>
            @endforeach
            </tr>
    <tr>
            @foreach ($recentevent as $rctevt)
            <td></td>
               <td> {{$rctevt->title}}</td>
                <td><a class="btn btn-success button5"  href="/index/{{$rctevt->id}}/edit" >Edit</a></td>
            @endforeach
    </tr>
    
        </table>
    </div>
</div>
@endsection