<div class="row">
	<div class="col-md-7">
		<div class="well well-sm">
	        <div class="text-right">
	            <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
	        </div>
	        <div class="row" id="post-review-box" style="display:none;">
	            <div class="col-md-12">
	                <form accept-charset="UTF-8" action="/comments/add/{{ $movie->id }}" method="POST">
	                	{{ csrf_field() }}
	                    <input id="ratings-hidden" name="rating" type="hidden"> 
	                    <textarea class="form-control animated" cols="50" id="new-review" name="content" placeholder="Enter your review here..." rows="5"></textarea>
	    
	                    <div class="text-right">
	                        <div class="add-stars starrr" data-rating="0"></div>
	                        <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
	                        <span class="glyphicon glyphicon-remove"></span>Cancel</a>
	                        <button class="btn btn-success btn-lg" type="submit">Save</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div> 
	</div>
</div>
    			
<div class="row">
	<div class="col-sm-4">
		<div class="rating-block">
			@if(isset($movie_reviews) && !is_null($movie_reviews))
				<h4>Average user rating</h4>
				<h2 class="bold padding-bottom-7">{{ $movie_reviews->points }} <small>/ 5</small></h2>
				@if($movie_reviews->points >=  1 && $movie_reviews->points < 2)
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				@elseif($movie_reviews->points >=  2 && $movie_reviews->points < 3)
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				@elseif($movie_reviews->points >=  3 && $movie_reviews->points < 4)
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				@elseif($movie_reviews->points >=  4 && $movie_reviews->points < 5)
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				@elseif($movie_reviews->points == 5)
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				@endif
			@endif
		</div>
	</div>
	<div class="col-sm-4">
		<h4>Rating breakdown</h4>
		@if(isset($movie_reviews) && !is_null($movie_reviews))
		<div class="pull-left">
			<div class="pull-left" style="width:35px; line-height:1;">
				<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
			</div>
			<div class="pull-left" style="width:180px;">
				<div class="progress" style="height:9px; margin:8px 0;">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
					<span class="sr-only">80% Complete (danger)</span>
				  </div>
				</div>
			</div>
			<div class="pull-right" style="margin-left:10px;">{{ $movie_reviews->five }}</div>
		</div>
		<div class="pull-left">
			<div class="pull-left" style="width:35px; line-height:1;">
				<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
			</div>
			<div class="pull-left" style="width:180px;">
				<div class="progress" style="height:9px; margin:8px 0;">
				  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
					<span class="sr-only">80% Complete (danger)</span>
				  </div>
				</div>
			</div>
			<div class="pull-right" style="margin-left:10px;">{{ $movie_reviews->four }}</div>
		</div>
		<div class="pull-left">
			<div class="pull-left" style="width:35px; line-height:1;">
				<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
			</div>
			<div class="pull-left" style="width:180px;">
				<div class="progress" style="height:9px; margin:8px 0;">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
					<span class="sr-only">80% Complete (danger)</span>
				  </div>
				</div>
			</div>
			<div class="pull-right" style="margin-left:10px;">{{ $movie_reviews->three }}</div>
		</div>
		<div class="pull-left">
			<div class="pull-left" style="width:35px; line-height:1;">
				<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
			</div>
			<div class="pull-left" style="width:180px;">
				<div class="progress" style="height:9px; margin:8px 0;">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
					<span class="sr-only">80% Complete (danger)</span>
				  </div>
				</div>
			</div>
			<div class="pull-right" style="margin-left:10px;">{{ $movie_reviews->two }}</div>
		</div>
		<div class="pull-left">
			<div class="pull-left" style="width:35px; line-height:1;">
				<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
			</div>
			<div class="pull-left" style="width:180px;">
				<div class="progress" style="height:9px; margin:8px 0;">
				  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
					<span class="sr-only">80% Complete (danger)</span>
				  </div>
				</div>
			</div>
			<div class="pull-right" style="margin-left:10px;">{{ $movie_reviews->one }}</div>
		</div>
		@endif
	</div>			
</div>			

<div class="row">
	<div class="col-sm-12">
		<hr/>
		<div class="review-block">
			@foreach($comments as $comment)
			<div class="row">
				<div class="col-sm-3">
					<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
					<div class="review-block-name"><a href="#">{{ $comment->author->name }}</a></div>
					<div class="review-block-date">{{ $comment->created_at->toDayDateTimeString() }}<br/>{{ $comment->created_at->diffForHumans() }}</div>
				</div>
				<div class="col-sm-9">
					<div class="review-block-rate">
						<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
					</div>
					<div class="review-block-title">this was nice in buy</div>
					<div class="review-block-description">{{ $comment->content }}</div>
				</div>
			</div>
			<hr/>
			@endforeach
		</div>
	</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/addcommentratings.js') }}"></script>