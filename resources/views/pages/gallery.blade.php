@extends('layout.app')

@section('content')

    <h1 style="text-align: center; margin-top:50px;">Gallery </h1>
    <div class="gallery">
        {{-- <a class="col-md-3 col-sm-4 col-xs-6 xz" href="gallery-open.php?album=3353">
                        <div class="gallery-box" name="1" style="background:url(https://ik.imagekit.io/theartling/p/original_images/artgallery.jpg)">
                            <div>
                                <div>

                                        <p style="padding-left:10px;padding-right:10px;text-align:left;">Drawing</p>
                                </div>
                            </div>
                        </div>
                </a> --}}
        @foreach ($images->unique('album_id') as $img)
            @foreach ($album as $key => $data)
                @if ($data->id == $img->album_id)
                    <tr>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <a href="/gallery/images/{{ $data->id }}"><img src="{{ $img->photo }}"
                                        alt="School Day 2020" class="card-img"></a>
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
