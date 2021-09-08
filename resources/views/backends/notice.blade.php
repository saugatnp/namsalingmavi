@extends('layout.backend')

@section('content')
    <div class="mainback">
        <h1>Notice</h1>
        <div class="back">
            <table cellpadding="0" style="width:100%;border: 1px solid black;">
                <tr>
                    <th>S.N.</th>
                    <th>Notice Title</th>
                    <th>Action</th>
                </tr>
                @foreach ($notice as $key => $data)
                    <tr>
                        <td></td>
                        <td>{{ $data->title }}</td>
                        <td>
                            {{-- code to delete notice --}}
                            {!! Form::open(['action' => ['PostController@destroy', $data->id], 'method' => 'POST', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <button type="submit" name="Delete" value="Delete" class="btn btn-primary">Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{-- add new notice --}}
            {!! Form::open(['action' => 'HomeController@add', 'method' => 'POST', 'onsubmit' => 'return confirm("are you sure ?")', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Add new notice') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Add new notice', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', ['class' => 'form-control', 'placeholder' => 'Image', 'required']) }}
            </div>
            {{ Form::submit('Add Notice', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
