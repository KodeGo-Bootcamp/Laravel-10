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
            <div class="d-flex align-items-center">
                <!-- <h1>Snippy Blog</h1> -->
                <a href="/p/create" class="btn btn-primary p-1" style="margin: 0 20px 0 0"> New Post </a>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div><strong>50</strong> Post</div>
                <div><strong>20k</strong> Followers</div>
                <div><strong>100k</strong> Following</div>
            </div>
            <div class="pt-2"><p>{{$user->profile->title}}<p></div>
            <div class=""><p>{{$user->profile->description}}</p></div>
            <div class=""><a target="_blank" href="https://renstrio24p.github.io/Mini-Project-Porfolio/" class="">{{$user->profile->url}}</a></div>
        </div>
        <div class="row">
            @foreach($user->posts as $post)
            <div class="col-4 p-3"><img class="w-100" src="/storage/{{$post->image}}" alt=""></div>
            @endforeach
            <!--  Add 3 divs and nest them together with a single div (8:31pm)  -->
            <!-- <div class="col-4 p-3"><img class="w-100" src="https://source.unsplash.com/1600x900/?cat" alt=""></div>
            <div class="col-4 p-3"><img class="w-100" src="https://source.unsplash.com/1600x900/?cat" alt=""></div>
            <div class="col-4 p-3"><img class="w-100" src="https://source.unsplash.com/1600x900/?cat" alt=""></div> -->
        </div>
    </div>
</div>
@endsection
