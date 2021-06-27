@extends('layout.app')

@section('content')
        <div class="book-list">
                <div class="row">
                        <div class="col-sm-6 book0-10">
                                <h2 >
                                        Book List
                                </h2>
                                <div class="book-list-pdf">
                                        <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&url=https://www.internetsociety.org/wp-content/uploads/2017/09/ISOC-History-of-the-Internet_1997.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="100%"
                                                width="100%">
                                        </iframe>
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
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 1
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 2
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 3
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 4
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 5
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 6
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 7
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 8
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 9
                                        </a>
                                        <a class="active list-group-item-action list-group-item" href="#">
                                                Book list class 10
                                        </a>
                                </ul>
                        </div>
                </div>
        </div>
@endsection