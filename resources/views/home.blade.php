@extends('layouts.app')

@section('content')
<!-- <div class="container bg-dark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=0.752xw:1.00xh;0.175xw,0&resize=1200:*" class="rounded-circle" alt="a dog" style="height: 10em" />
        </div>
        <div class="col-9">
            <div>
                <h1>Snippy Blog</h1>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div><strong>50</strong> Post</div>
                <div><strong>20k</strong> Followers</div>
                <div><strong>100k</strong> Following</div>
            </div>
        </div>
    </div>
</div>
@endsection
