@extends('user.layouts.master')

@section('navbar')
    @include('user.layouts.navbar')
@endsection

@section('title', 'User|HomePage')

@section('content')

<section class="mood">
    <div class='container'>
        <div class="suggested-film">
            <div class="film-img">
            <img src='{{ asset('admin/images/' . $movie->image)}}' alt='film-picture'>
            </div>

            <div class='film-details'>
                <h2 class="title">{{$movie->name}}</h2>
                <span class="category">
                    @foreach($movie->categories as $m_cat)
                        {{$m_cat->name}},
                    @endforeach
                </span>
                <span class="rate"><i class="fas fa-star"></i> {{$movie->rate}}</span>
                <p class="desc">{{$movie->disc}}</p>
                <a href="{{$movie->link}}"><button class='btn btn-info'>Go To Watch</button></a>
            </div>
        </div>
    </div>
</section>
@endsection
