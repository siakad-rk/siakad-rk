<?php

namespace App\Http\Controllers;

use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Response;
use App\MataPelajaran;
use App\TahunAjaran;
use App\Nilai;

class NilaiController extends Controller
{
    public function genExcel(Request $request)
    {
        $mp = $request->mpc;
        $cat = $request->cat;
        $sems = $request->sems; 
        $filename = $mp . ' - ' . $cat . ' - ' . $sems;
        $filepath = "\public\download\\template_nilai.xls";
        Excel::load($filepath, function($file) use($filename,$mp,$cat,$sems){
            $sheet1 = $file->setActiveSheetIndex(0);
            Excel::create($filename, function($excel) use($sheet1,$mp,$cat,$sems) {
                $excel->addExternalSheet($sheet1);
                $sheet1->setCellValue('C2', $mp);
                $sheet1->setCellValue('C3', $cat);
                $sv = explode(" - ", $sems);
                $sheet1->setCellValue('C5', $sv[0]);
                $sheet1->setCellValue('C6', $sv[1]);
            })->export('xls');
        });
    }
    public function showUH()
    {
        $mp = MataPelajaran::all();
        return view('nilai.uh',['mp'=>$mp]);
    }
    public function showPsiko()
    {
        $mp = MataPelajaran::all();
        return view('nilai.psikomotor',['mp'=>$mp]);
    }
    public function showAfe()
    {
        $mp = MataPelajaran::all();
        return view('nilai.afektif',['mp'=>$mp]);
    }
    public function showMidFin()
    {
        $mp = MataPelajaran::all();
        return view('nilai.check',['mp'=>$mp]);
    }
    public function showGenExcel(){
        $mp = MataPelajaran::all();
        $sem = TahunAjaran::all();
        $nilai = Nilai::all();
        return view('nilai.up',['mp'=>$mp , 'sem'=>$sem, 'nilai'=>$nilai, 'mps'=>$mp, 'sems'=>$sem, 'mpx'=>$mp, 'semx'=>$sem]);
    }
}
