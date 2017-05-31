<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show()
    {
    	// return view;
    }

    public function store()
    {
    	// Validate the form
    	$this->validate(request(), [
    		'name' => 'required',
    		'email'	=> 'required|email',
    		'password'	=> 'required'
		]);

    	// Create the user
    	$user = User::create(request(['name', 'email', 'password']));

    	// Sign him in.
    	auth()->login($user);

    	// Redirect home
    	return redirect()->home(); 
    }
}
