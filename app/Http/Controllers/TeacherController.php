<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Announcement;
use App\User;

class TeacherController extends Controller
{
    public function postAnnouncement(Request $request)
    {
        if($request->cat=="Ulangan Harian")
            $stkode = "UH";
        else if($request->cat=="Tugas")
            $stkode = "TG";
        else if($request->cat=="UTS/UAS")
            $stkode = "FA";
        else if($request->cat=="Umum")
            $stkode = "GE";
        $excode = Auth::user()->no_induk;
        $numCode = substr($excode,strlen($excode)-2,strlen($excode)-1);
        $input = new Announcement();
        $input->kode = $stkode . $numCode;
        $input->title = $request->title;
        $input->description = $request->content;
        $input->no_induk = Auth::user()->no_induk;
        $input->save();
    }   
    public function showFormAnnouncement()
    {
        return view('menu_guru.add_announcement');
    }
}
