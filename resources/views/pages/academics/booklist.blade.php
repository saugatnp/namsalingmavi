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
                                        <img src="{{$img->image}}"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="100%"
                                                width="100%">
                                        </iframe>
                                        @endforeach
                                </div>
                                &nbsp;
                                <a href="#" class="btn btn-primary" target="_blank" rel="noopener noreferrer" margin="20px">
                                        &nbsp;
                                        <i class="fa fa-download mr-1">
                                        </i> 
                                        &nbsp;  Download
                                </a>
                        </div>
                        <div class="col-sm-4 book0-10 ">
                                <h5>Book List/Others</h5>
                                <ul class="list-group">
                                        {{-- @foreach ($bookone as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                
                                                @endforeach
                                        </a>
                                        @foreach ($booktwo as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($bookthree as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($bookfour as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a> --}}
                                        {{-- @foreach ($image as $key => $data)
            <tr>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $data->photo }}" alt="School Day 2020" class="card-img" >
                    </div>
                </div>
            </tr>
        @endforeach --}}
                                        @foreach($book as $key => $data)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$data->id}}">
                                                {{$data->title}}
                                        </a>
                                        @endforeach
                                        {{-- @foreach ($bookfive as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($booksix as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($bookseven as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($bookeight as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($booknine as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a>
                                        @foreach ($bookten as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                @endforeach
                                        </a> --}}
                                </ul>
                        </div>
                </div>
        </div>
@endsection