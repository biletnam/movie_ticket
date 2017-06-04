<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieImages extends Model
{
    public function movie()
    {
    	return $this->belongsTo('App\Movie');
    }
}
