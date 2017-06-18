<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['name', 'duration', 'status', 'release_date', 'description', 'youtube_link'];

    public function stars()
    {
    	return $this->belongsToMany('App\Stars', 'movie_stars', 'movie_id', 'star_id');
    }

    public function genres()
    {
    	return $this->belongsToMany('App\Genres', 'genre_movie', 'genre_id', 'movie_id');
    }

    public function images()
    {
    	return $this->hasMany('App\MovieImages');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function reviews()
    {
        return $this->hasMany('App\MovieReview');
    }

    public function addComment($body, $user_id)
    {
        // // Inticialize and save the comment object
        // $comment = new Comments;
        // $comment->user_id = Auth::id();
        // $comment->movie_id = $movie->id;
        // $comment->content = $request->content;
        // $comment->save();
        
        // Or with eloquent :)
        $this->comments()->create([ 'user_id' => $user_id, 'content' => $body]);
    }

    public function addRating($stars, $user_id)
    {
        $this->reviews()->create([ 'user_id' => $user_id, 'stars' => $stars ]);
    }
}