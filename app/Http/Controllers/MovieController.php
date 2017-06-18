<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Stars;
use App\Genres;
use App\MovieImages;
use App\Comments;
use Auth;
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
                    'description'  => request()->description,
                    'youtube_link'  => request()->youtube_link, 
                    'release_date' => request()->release_date
                ]);

        // Insert data into movie_stars and genre
        $movie->stars()->attach(request()->stars);
        $movie->genres()->attach(request()->genres);

        // Upload and store image
        if(request()->file('movie_image'))
        {
            $upload = new MovieImages;
            // $upload->movie_id = 2;
            $upload->image_path = request()->file('movie_image')->store('public');
            $movie->images()->save($upload);
        }
        
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
        $movie = Movie::find($id);
        $comments = $movie->comments;
        $reviews = $movie->reviews;

        $movie_reviews = null;
        if ($reviews->count()) {
            // Calculate reviews:
            $movie_reviews = new \stdClass();
            $movie_reviews->one = 0;
            $movie_reviews->two = 0;
            $movie_reviews->three = 0;
            $movie_reviews->four = 0;
            $movie_reviews->five = 0;
            $total = 0;
            $sum = 0;
            foreach ($reviews as $review) {
                switch ($review->stars) {
                    case '1':
                        $movie_reviews->one++;
                        break;
                    case '2':
                        $movie_reviews->two++;
                        break;
                    case '3':
                        $movie_reviews->three++;
                        break;
                    case '4':
                        $movie_reviews->four++;
                        break;
                    case '5':
                        $movie_reviews->five++;
                        break;
                }
                $sum += $review->stars;
                $total++;
            }
            $movie_reviews->total = $total;
            $movie_reviews->points = $sum/$total;
        }

        return view('movie.profile', compact('movie', 'comments', 'movie_reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stars = Stars::all();
        $genres = Genres::all();
        $movie = Movie::findOrFail($id);
        
        return view('movie.create', compact('stars', 'genres', 'movie'));
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
        $movie = new Movie;
        $movie::find($id)->update(request()->all());
        if ($movie->has('stars')) {
            $movie::find($id)->stars()->sync(request()->stars);
        }
        if ($movie->has('genres')) {
            $movie::find($id)->genres()->sync(request()->genres);
        }
        // Upload and store image
        if(request()->file('movie_image'))
        {
            $upload = new MovieImages;
            $upload->image_path = request()->file('movie_image')->store('public');
            $movie::find($id)->images()->save($upload);
        }

        redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "string";die;
        $movie->findOrFail($id);
        dd($movie);
    }

    /*
    *   Insert new movie comment
    *   @param int $id
    */
    public function comments(Request $request ,$id)
    {
        //dd($request->all());
        $movie = Movie::find($id);
        $movie->addComment(request('content'), Auth::id());
        $movie->addRating(request('rating'), Auth::id());

        return back();
    }

}
