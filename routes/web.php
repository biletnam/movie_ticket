<?php
Use App\Movie;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@lists');

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
Route::get('/movies/{id}', 'MovieController@show');
Route::get('movies/{id}/edit', 'MovieController@edit');
Route::patch('movies/{id}/edit', 'MovieController@update');
Route::get('/movies/destroy/{id}', 'MovieController@destroy');

Route::post('/comments/add/{id}', 'MovieController@comments');
/*
*	Datatables Routes - All datatables functions are inside one controller
*/
Route::get('/datatables/movies', 'DatatablesController@movies');