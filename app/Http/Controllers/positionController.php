<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class positionController extends Controller
{
    public function showPosition(Request $request)
    {
        $dosen = User::where('posisi', '!=', 'null')->get();
        return view('position',['dosen'=>$dosen]);
    }
}
