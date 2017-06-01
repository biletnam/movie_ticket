<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function show()
    {
    	return view('auth.register');
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
    	// $user = User::create(request(['name', 'email', 'password']));
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

    	// Sign him in.
    	auth()->login($user);

    	// Redirect home
    	return redirect()->home(); 
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
