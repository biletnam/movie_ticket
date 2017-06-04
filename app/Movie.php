<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['name', 'duration', 'status', 'release_date'];

    public function stars()
    {
    	return $this->belongsToMany('App\Stars');
    }

    public function genres()
    {
    	return $this->belongsToMany('App\Genres', 'genre_movie', 'genre_id', 'movie_id');
    }

    public function images()
    {
    	return $this->hasMany('App\MovieImages');
    }
}