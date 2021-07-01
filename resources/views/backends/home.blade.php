@extends('layout.backend')

@section('content')

<h1>backend home</h1>
<div id="welcome">
    {!! Form::open(['action'=> 'PostController@store' , 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('key' , 'Key')}}
        {{Form::text('key' , '' , ['class' => 'form-control' , 'placeholder' => 'Key' ,'required'=>'true'])}}
    </div>
    <div class="form-group">
        {{Form::label('title' , 'Titasale')}}
        {{Form::text('title' , '' , ['class' => 'form-control' , 'placeholder' => 'Tiaaatle'])}}
    </div>
    <div class="form-group">
        {{Form::label('value' , 'Value')}}
        {{Form::textarea('value' , '' , ['id'=>'editor','class' => 'form-control' , 'placeholder' => 'Value'])}}
    </div>
    <div class="form-group">
        {{Form::label('image' , 'Image')}}
        {{Form::text('image' , '' , ['class' => 'form-control' , 'placeholder' => 'Image'])}}
    </div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
<div id="editor">
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection