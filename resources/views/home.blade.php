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
    <div class="row align-items-center">
        <div class="col-2 p-2">
            <img class="rounded-circle" src="https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=0.752xw:1.00xh;0.175xw,0&resize=1200:*"  alt="a dog" style="height: 10em" />
        </div>
        <div class="col-9">
            <div>
                <!-- <h1>Snippy Blog</h1> -->
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div><strong>50</strong> Post</div>
                <div><strong>20k</strong> Followers</div>
                <div><strong>100k</strong> Following</div>
            </div>
            <div class="pt-2"><p>@test_user<p></div>
            <div class=""><p>I love laravel and I just want to explore more of it.</p></div>
            <div class=""><a target="_blank" href="https://renstrio24p.github.io/Mini-Project-Porfolio/" class="">Renstrio Page</a></div>
        </div>
    </div>
</div>
@endsection
