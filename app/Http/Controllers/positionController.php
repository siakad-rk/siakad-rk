<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class positionController extends Controller
{
    public function showPosition(Request $request)
    {
        $guru = User::where('posisi', '!=', 'null')->get();
        return view('position',['guru'=>$guru]);
    }
}
