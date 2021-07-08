@extends('layout.backend')

@section('content')

    {{-- <div class=".col-12 .col-md-8 back"> --}}
        {{-- @foreach ($bookone as $book)
            <div class="active list-group-item-action list-group-item">
                {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
        @endforeach
    </div>
    @foreach ($booktwo as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookthree as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookfour as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookfive as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($booksix as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookseven as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookeight as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($booknine as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div>
    @foreach ($bookten as $book)
        <div class="active list-group-item-action list-group-item">
            {{ $book->title }}&nbsp;&nbsp;&nbsp;
            <a href="/index/{{ $book->id }}/edit" class="btn btn-danger">Edit</a>
    @endforeach
    </div> --}}
    <div class="mainback">
        <h1>Gallery</h1>
        <div class="back">
            <table cellpadding="0" style="width:100%;border: 1px solid black;">
                <tr>
                    <th>S.N.</th>
                    <th>Album Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($book as $key => $data)
                    <tr>
                        <td></td>
                        <td>{{ $data->title }}</td>
                        <td><a class="btn btn-success " href="/index/{{ $data->id }}/edit">
                                <i class="fa fa-edit"></i>
                                &nbsp;Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
