@extends('layout.backend')

@section('content')
    <div class="mainback">
        <h1>Routine</h1>
        <div class="back">
            <table cellpadding="0" style="width:100%;border: 1px solid black;">
                <tr>
                    <th>S.N.</th>
                    <th>Album Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($routine as $key => $data)
                    <tr>
                        <td></td>
                        <td>{{ $data->title }}</td>
                        <td><a class="btn btn-success " href="/index/{{ $data->id }}/edit">
                                <i class="fa fa-edit"></i>
                                &nbsp;Edit
                            </a>
                            {{-- code to delete routine we passs the id to destroy function --}}
                            {!! Form::open(['action' => ['PostController@destroy', $data->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <button type="submit" name="Delete" value="Delete" class="btn btn-primary">Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{-- add new routine --}}
            {!! Form::open(['action' => 'HomeController@add', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Add new routine') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Add new routine']) }}
            </div>
            {{ Form::submit('Add Routine', ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
