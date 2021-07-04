@extends('layout.backend')

@section('content')

<div>
    @foreach ($bookone as $book)
                                        <a class="active list-group-item-action list-group-item" href="/academics/booklist/{{$book->id}}">
                                                {{$book->title}}
                                                {{-- <a href="/home/{{$secthree->id}}/edit">Edit</a> --}}
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
                                        </a>
                                        @foreach ($bookfive as $book)
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
</div>
@endsection