<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Announcement;
use App\Lomba;

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
		$lombas = Lomba::all();
		return view('info', ['lombas'=>$lombas]);
	}

	public function showAddInfo()
	{
		return view('addinfo');
	}

	public function addInfo(Request $request)
	{
		$lomba = new Lomba;
		$lomba->nama = $request->input('nama');
		$lomba->tanggal = $request->input('tanggal');
		$lomba->lokasi = $request->input('lokasi');
		$lomba->save();
		Session::flash('message', 'Add kelas berhasil!');
		Session::flash('alert-class', 'alert-success'); 
		return redirect()->route('addinfo');
	}
}