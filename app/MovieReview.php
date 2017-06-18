<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieReview extends Model
{
	protected $fillable = ['user_id' ,'stars'];

    public function movie()
    {
    	return $this->belongsTo('App\Movie');
    }
}
