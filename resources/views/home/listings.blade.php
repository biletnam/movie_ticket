@extends('layouts.movietickets_v1.default')
@section('content')

<div class="col-xs-10 col-md-12">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" role="tabpanel">
        	@foreach($movies as $movie)
            <div class="col-sm-4">
                <div class="thumbnail home-pagination">
                	@if($movie->images)
						<img src="{{ asset('storage/' .str_replace('public','',$movie->images[0]->image_path)) }}">
                	@else
                    	<img alt="..." src="http://placehold.it/240x150">
                    @endif
                    <div class="caption">
                    	<div class="pagination-title">
                        	<h3 class="pointer"><a href="movies/{{$movie->id}}">{{ $movie->name }}</a></h3>
                        </div>
                        <div class="home-desciprtion">{{ $movie->description }}</div>
                        <div class="read-btn"><a class="btn btn-primary" href="movies/{{$movie->id}}" role="button">Read more
                        ...</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
	<div class="row">
		<nav aria-label="...">
	    	<ul class="pager" role="tablist">
				{{ $movies->links() }}
	        </ul>
	    </nav>
	</div>
</div>

@endsection