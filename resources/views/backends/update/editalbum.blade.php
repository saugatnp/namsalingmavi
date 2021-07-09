<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.js') }}">
</head>

<body>
    @include('includes.messages')
    <a href="{{ url()->previous() }}" class="btn btn-success button4">Go Back</a>
    <div id="editpage">
        {!! Form::open(['action' => ['PostController@update', $album->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $album->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>

        {{ Form::hidden('url', $url = str_replace(url('/'), '', url()->previous())) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
    <center>
        <div class="mainback">
            <h1>Gallery</h1>
            <div class="back">
                {!! Form::open(['action' => ['PostController@store', $album->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{ Form::file('photo',['required']) }}
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
                                <td><img src="{{ $data->photo }}" class="tableimg"></td>
                                <td>
                                    {{-- code to delete an image --}}
                                    {!!Form::open(['action'=>['PostController@destroy' ,$data->id ], 'method'=>'POST','onsubmit' => 'return confirm("are you sure ?")'])!!}
                                    {{Form::hidden('_method' ,'DELETE')}}
                                    <button type="submit" name="Delete" value="Delete" class = "btn btn-primary">Delete</button> 
                                    {{-- {{Form::submit('Delete' , ['class' => 'btn btn-primary'])}} --}}
                                    {!!Form::close()!!}
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
