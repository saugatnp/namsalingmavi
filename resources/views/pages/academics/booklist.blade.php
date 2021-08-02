@extends('layout.app')

@section('content')
        <div class="book-list">
                <div class="row">
                        <div class="col-sm-6 book0-10">
                                <h2 >
                                        Book List
                                </h2>
                                <div class="book-list-pdf">
                                        @foreach ($post as $img)
                                        <img src="{{asset('storage/images/'.$img->image)}}"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="100%"
                                                width="100%">
                                        </iframe>
                                        
                                </div>
                                &nbsp;
                                
                                <a href="{{ route('booklist.download' , $img->id )}}" class="btn btn-primary" target="_blank" rel="noopener noreferrer" margin="20px">
                                        &nbsp;
                                        <i class="fa fa-download mr-1">
                                        </i> 
                                        &nbsp;  Download
                                </a>
                                @endforeach
                        </div>
                        <div class="col-sm-4 book0-10 ">
                                <h5>Book List/Others</h5>
                                <ul class="list-group">
                                        @foreach($book as $key => $data)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$data->id}}">
                                                {{$data->title}}
                                        </a>
                                        @endforeach
                                </ul>
                        </div>
                </div>
        </div>
@endsection