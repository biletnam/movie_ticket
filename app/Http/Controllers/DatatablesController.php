<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Carbon;
use App\Movie;
use App\Stars;
use App\Genres;

class DatatablesController extends Controller
{
    public function movies()
    {
    	$movies = Movie::latest()->get(); 

    	return Datatables::of($movies)
                ->editColumn('release_date', function($date){
                    return Carbon\Carbon::parse($date->release_date)->toFormattedDateString();
                })
                ->editColumn('status', function($status){
                	return ($status->status == 1) ? 'Active' : 'Inactive';
                })
                ->editColumn('stars', function($stars){
                	$star = $stars->stars->map(function ($item){
                		return $item->first_name . ' ' . $item->last_name;
                	});
                	return $star->all();
                })                
                ->editColumn('genres', function($genres){
                	$genre = $genres->genres->map(function ($item){
                		return $item->name;
                	});
                	return $genre->all();
                })
	            ->addColumn('edit', function ($movie) {
	                return '';
	            })
                ->make(true);
    }
}
