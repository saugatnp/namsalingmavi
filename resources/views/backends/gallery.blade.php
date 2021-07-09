@extends('layout.backend')

@section('content')

    <div class="mainback">
        <h1>Gallery</h1>
        <div class="back">
            <table cellpadding="0" style="width:100%;border: 1px solid black;">
                <tr>
                    <th>S.N.</th>
                    <th>Album Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($album as $key => $data)
                    <tr>
                        <td></td>
                        <td>{{ $data->title }}</td>
                        <td><a class="btn btn-primary " href="/index/{{ $data->id }}/edit">
                                <i class="fa fa-edit"></i>
                                &nbsp;Edit
                            </a>
                            {{-- code to delete album --}}
                            {!!Form::open(['action'=>['PostController@destroy' ,$data->id ], 'method'=>'POST','class'=>'pull-right ' ,'onsubmit' => 'return confirm("are you sure ?")'])!!}
                            {{Form::hidden('_method' ,'DELETE')}}
                            <button type="submit" id="submit" name="Delete" value="Delete" class = "btn btn-primary">Delete</button> 
                            {{-- {{Form::submit('Delete' , ['class' => 'btn btn-primary'])}} --}}
                            {!!Form::close()!!}
                            {{-- <script>
                            jQuery(document).ready(function($){
                                $('.deleteGroup').on('submit',function(e){
                                   if(!confirm('Do you want to delete this item?')){
                                         e.preventDefault();
                                   }
                                 });
                           });
                           </script> --}}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{--  add new album --}}
            {!! Form::open(array('action' => 'HomeController@add', 'method' => 'POST')) !!}
        <div class="form-group">
            {{ Form::label('title', 'Add new album') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Add new album']) }}
        </div>
        {{ Form::submit('Add Album', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
        </div>
    </div>
@endsection
