@extends('user.layouts.master')

@section('navbar')
    @include('user.layouts.navbar')
@endsection

@section('title', 'User|HomePage')

@section('content')

    <section class='home'>
        <div class="overlay text-center">
            <h1>Tell us your film mood and we will suggest one to you</h1>
        </div>
        <div class="container">
        </div>
    </section>

    <section class="mood">
            <select class="form-control" onchange="document.location=this.options[this.selectedIndex].value">
                <option selected disabled> Choose What Film Mood You Want</option>
                @foreach($cats as $cat)
                        <option value="{{route("movie", $cat->id)}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </form>
    </section>

    <section class="new-items">
        <div class="overlay">
            <div class="container">
                <h2><span>Last Items</span> Added</h2>
                <div class="row">
                    @foreach($movies as $movie)
                        <div class="col-md">
                            <div class='film-img'>
                                <img src="{{ asset('admin/images/' . $movie->image)}}" alt="film-image">
                            </div>
                            <div class='details'>
                                <h4>{{$movie->name}}</h4>
                                <span class="category">
                                    @foreach($cats as $cat)
                                        @foreach($movie->categories as $m_cat)
                                            @if($m_cat->id == $cat->id)
                                                {{$cat->name}},
                                            @endif
                                        @endforeach
                                    @endforeach
                                </span>
                            <span class="rate"><i class="fas fa-star"></i> {{$movie->rate}}</span>
                            <a href="{{$movie->link}}"><button class='btn btn-primary'>Watch</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
