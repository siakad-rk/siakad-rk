<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataPelajaran;
use App\TahunAjaran;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
