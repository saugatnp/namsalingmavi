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
        {{-- calls update funtion from postcontroller and passes the id --}}
        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
        {{-- text area for title --}}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Tiaaatle', 'required']) }}
        </div>
        {{-- text area for value --}}
        <div class="form-group">
            {{ Form::label('value', 'Enter Text Here') }}
            {{ Form::textarea('value', $post->value, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Value', 'required']) }}
        </div>
        {{-- area for image --}}
        <div class="form-group">
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image', ['class' => 'form-control', 'placeholder' => 'Image']) }}
        </div>
        {{-- we pass pervious url through post method to check where the request is comming from --}}
        {{ Form::hidden('url', $url = str_replace(url('/'), '', url()->previous())) }}
        {{-- passing the method as put for this route --}}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    {{-- script for ck editor --}}
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
