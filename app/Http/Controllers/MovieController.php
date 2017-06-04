<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Stars;
use App\Genres;
// use Datatables;
// use Carbon;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->get();

        // if(request()->ajax())
        // {
        //     return Datatables::of($movies)
        //         ->editColumn('release_date', function($movies){
        //             return Carbon\Carbon::parse($movies->release_date)->toFormattedDateString();
        //         })
        //         ->make(true);
        // }

        return view('movie.show', compact('movies'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stars = Stars::all();
        $genres = Genres::all();
        
        return view('movie.create', compact('stars', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|min:5',
            'duration' => 'required|numeric',
            'stars' => 'required',
            'genres'    => 'required'
        ]);

        $movie = Movie::create([
                    'name'  => request()->name,
                    'duration' => request()->duration,
                    'status'    => request()->status,
                    'release_date' => request()->release_date,
                ]);

        // Insert data into movie_stars and genre
        $movie->stars()->attach(request()->stars);
        $movie->genres()->attach(request()->genres);

        redirect('/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
