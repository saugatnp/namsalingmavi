@extends('layouts.app')

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Page not found!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                    
                    {{ __('Click here to login') }}&nbsp;<a class="btn btn-primary" href="/login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
