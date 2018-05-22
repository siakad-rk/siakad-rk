<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Announcement;

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
		$an = Announcement::all();
		// dd(1);
		// dd($an->users());
		return view('home',['an'=>$an]);
	}

	public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }

	public function kalender()
	{
		return view('kalender');
	}

	public function info()
	{
		return view('info');
	}
}
