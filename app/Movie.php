<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $fillable = ['name', 'duration', 'status', 'release_date'];

    public function stars()
    {
    	return $this->hasMany(Stars::class);
    }
}