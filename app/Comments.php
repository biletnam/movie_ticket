<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $fillable = ['user_id', 'content'];

    public function movie()
    {
    	return $this->belongsTo('App\Movie');
    }
    public function author()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
