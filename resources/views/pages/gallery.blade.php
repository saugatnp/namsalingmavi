@extends('layout.app')

@section('content')

    <h1 style="text-align: center; margin-top:50px;">Gallery </h1>
    <div class="gallery">
        {{-- to find the first image of a album we choose unique album id and display in gallery --}}
        @foreach ($images->unique('album_id') as $img)
            @foreach ($album as $key => $data)
                @if ($data->id == $img->album_id)
                    <tr>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                {{-- <a href="/gallery/images/{{ $data->id }}" class="card-img"><img src="/storage/images/{{ $img->photo }}" --}}
                                <a href="/gallery/images/{{ $data->id }}" class="card-img"><img src="{{ $img->photo }}"
                                        alt="{{$data->title}}" class="card-img"></a>
                                <div class="card-body">
                                    <div class="card-title">
                                        <th>{{ $data->title }}</th>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endif
            @endforeach
        @endforeach
    </div>

@endsection
