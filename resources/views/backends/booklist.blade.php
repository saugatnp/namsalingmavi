@extends('layout.backend')

@section('content')

    <div class=".col-12 .col-md-8">
        @foreach ($bookone as $book)
            <div class="active list-group-item-action list-group-item">
                {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
        @endforeach
    </div>
    @foreach ($booktwo as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookthree as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookfour as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookfive as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($booksix as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookseven as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookeight as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($booknine as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookten as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;
            <a href="/home/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    </div>
@endsection
