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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function genExcel(Request $request)
    {
        // dd($request->mpc);
        $mp = $request->mpc;
        $cat = $request->cat;
        $sems = $request->sems; 
        $filename = $mp . ' - ' . $cat . ' - ' . $sems;
        // dd($filename);
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return view('nilai.up',['mp'=>$mp , 'sem'=>$sem]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
