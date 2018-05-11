<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class HomeController extends Controller
{
	public function doLogin(Request $request)
	{
	  $credentials = $request->only('no_induk', 'password');
	  if (Auth::attempt($credentials)) {
			$user_details = User::where('no_induk', $request->input('no_induk'))->get();
			Session::put('user', $user_details[0]);
			return redirect()->route('home');
	  }
	  else{
			return 'not entered ';
	  }
	}

	public function showLogin()
	{
		return view('login');
	}

	public function showHome()
	{
		return view('layouts.master');
	}

	public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
