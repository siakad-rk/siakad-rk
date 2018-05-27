<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ekskul;
use Illuminate\Support\Facades\Session;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all();
        $ekskul = $ekskul->whereNotIn('id', 1);
        if(session('user.ekskul_id')!=1){
        	$ekskul_user = Ekskul::find(session('user.ekskul_id'));
        }
        else {
        	$ekskul_user = null;
        }
        return view('ekskul.index',['ekskul'=>$ekskul, 'ekskul_user'=>$ekskul_user]);
    }

    public function tambah(Request $request)
    {
    	$student = User::where('no_induk', session('user.no_induk'))->get();
	    $ekskul = Ekskul::find($request->input('id'));
	    $ekskul->user()->save($student[0]);
		session(['user.ekskul_id' => $request->input('id')]);
        return redirect('ekskul');
    }
}
