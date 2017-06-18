@extends('layouts.movietickets_v1.default')

@section('content')
<div class="card">
    <div class="container-fliud">
        <div class="wrapper row">
            @if(count($movie->images) > 0)
            <div class="preview col-md-6">
                <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="{{ asset('storage/' .$movie->images[0]->image_path) }}"></img></div>
                    @foreach($movie->images as $image)
                    <div class="tab-pane" id="pic-2"><img src="{{ asset('storage/' .$image->image_path) }}"></img></div>
                    @endforeach
                </div>
                <ul class="preview-thumbnail nav nav-tabs">
                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('storage/' .$movie->images[0]->image_path) }}"></img></a></li>
                    @foreach($movie->images as $image)
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('storage/' .$movie->images[0]->image_path) }}"></img></a></li>
                    @endforeach

                </ul>

            </div>
            @endif
            <div class="details col-md-6">
                <h3 class="product-title">{{ $movie->name }}</h3>
                @if(!is_null($movie_reviews))
                    <div class="rating">
                    @if($movie_reviews->points >=  1 && $movie_reviews->points < 2)
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    @elseif($movie_reviews->points >=  2 && $movie_reviews->points < 3)
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    @elseif($movie_reviews->points >=  3 && $movie_reviews->points < 4)
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    @elseif($movie_reviews->points >=  4 && $movie_reviews->points < 5)
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    @elseif($movie_reviews->points == 5)
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                    @endif
                        <span class="review-no">{{ $movie_reviews->total }} reviews</span>
                    </div>
                @endif
                <p class="product-description">{{ $movie->description }}</p>
                <h4 class="price">Duration: <span>{{ $movie->duration }} min</span></h4>
                <p class="vote">
                    <strong>Stars:</strong> 
                    @foreach($movie->stars as $star)
                    {{ $star->first_name . ' ' . $star->last_name }}
                    @endforeach
                </p>
                <h5 class="sizes">Release date: {{ $movie->release_date }}</h5>
                <div class="action">
                    <button class="add-to-cart btn btn-default" type="button">add to watchlist</button>
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                </div>				
            </div>
        </div>
    </div>
</div>

<hr>

@include('movie.profile_comments_ratings')

@endsection

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="{{ URL::asset('css/moviesprofile.css') }}" rel="stylesheet">