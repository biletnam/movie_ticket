<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    /*
    *  Movie Listings Dashboard -  Pagination
    *
    */
    public function lists()
    {
        $movies = Movie::paginate(6);
        $movies->withPath('home');
        return view('home.listings', compact('movies'));
    }
}
