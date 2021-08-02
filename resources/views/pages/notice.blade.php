@extends('layout.app')

@section('content')
    <h1 style="text-align:center;"><strong> Notice Board</strong></h1>
    <center>
        <div class="notice">
            @foreach ($notice as $key => $data)
                <div class="contents">
                    <p>{{ $data->title }}</p>
                    <p class="dtt">{{ date('Y/m/d', strtotime($data->created_at)) }}</p>
                    <a href="/notice/viewdetails/{{ $data->id }}"><button class="btn btn-primary">View
                            Details</button></a>
                </div>
                <hr />
            @endforeach
        </div>
    </center>


    <div style="height: 100px; display:flex;">
        <?php echo $notice->render() ?>
    </div>

@endsection
