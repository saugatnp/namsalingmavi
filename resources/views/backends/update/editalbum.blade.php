<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body>
    @include('includes.messages')
    <a href="{{ url()->previous() }}" class="btn btn-success button4">Go Back</a>
    <div id="editpage">
        {{-- callers update funtion and passes id --}}
        {!! Form::open(['action' => ['PostController@update', $album->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{-- to update the album name we display previous name and send the new name to update --}}
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $album->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        {{-- passes the previous url to check where the request is comming from --}}
        {{ Form::hidden('url', $url = str_replace(url('/'), '', url()->previous())) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
    <center>
        <div class="mainback">
            <h1>{{$album->title}}</h1>
            <div class="back">
                {{-- to add new images to the album we pass the album id and the file to store function in postcontroller --}}
                {!! Form::open(['action' => ['PostController@store', $album->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{-- <div class="form-group">
                    {{ Form::file('photo', ['required']) }}
                </div> --}}
                <div class="form-group">
                    {{ Form::label('image', 'Add Image') }}
                    {{ Form::file('photo', ['class' => 'form-control', 'placeholder' => 'Image' , 'required']) }}
                </div>
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                <table cellpadding="0" style="width:100%;border: 1px solid black;">
                    <tr>
                        <th>S.N.</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($images as $key => $data)
                        @if ($data->album_id == $album->id)
                            <tr>
                                <td></td>
                                <td><img src="{{asset('/storage/images/'.$data->photo)}}" class="tableimg"></td>
                                <td>
                                    {{-- code to delete an image --}}
                                    {!! Form::open(['action' => ['PostController@destroy', $data->id], 'method' => 'POST', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button type="submit" name="Delete" value="Delete"
                                        class="btn btn-primary">Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </center>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>
