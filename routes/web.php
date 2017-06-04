<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.movietickets_v1.default');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/*
*	Auth Routes
*/
Route::get('/register', 'AuthController@show')->name('register');
Route::post('/register', 'AuthController@store');
Route::get('/logout', 'AuthController@destroy');

/*
*	Movie Routes
*/
Route::get('/movies', 'MovieController@index');
Route::get('/movies/add', 'MovieController@create');
Route::post('/movies/add', 'MovieController@store');
// Route::get('/movies/datatable', 'MovieController@index_datatable')->name('datatable');


/*
*	Datatables Routes - All datatables functions are inside one controller
*/
Route::get('/datatables/movies', 'DatatablesController@movies');