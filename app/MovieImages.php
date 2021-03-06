<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieImages extends Model
{
	protected $fillable = ['movie_id', 'image_path'];
    public function movie()
    {
    	return $this->belongsTo('App\Movie');
    }
}
