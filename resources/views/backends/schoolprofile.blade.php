@extends('layout.backend')

@section('content')
    <div class="mainback">
        <h1>School Profile</h1>
        <div class="back">
            <table cellpadding="0" style="width:100%;border: 1px solid black;">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                {{-- diplasy all the data --}}
                @foreach ($profile as $key => $data)
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
