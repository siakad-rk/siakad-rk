@extends('layouts.master')

@section('title','Input/Edit Nilai')
@section('header','Input/Edit Nilai')

@section('content')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#menu1">Komunal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Per Kelas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu3">Individu</a>
  </li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane container active" id="menu1">
    <div class="row">
      <div class="blok">
        <h3>1. Buat Template Excel</h3>
        <form method="post" action="/genexe">
            @csrf
            <div class="form-group">
              <label for="mpc">Mata Pelajaran</label>
              <select class="form-control" id="mpc" name="mpc">
                @foreach($mp as $mp)
                <option>{{$mp->pelajaran}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="cat">Jenis Nilai</label>
              <select class="form-control" id="cat" name="cat">
                <option>Ulangan Harian</option>
                <option>Psikomotorik</option>
                <option>Afektif</option>
                <option>UTS</option>
                <option>UAS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="mpc">Tahun Ajaran - Semester</label>
              <select class="form-control" id="sems" name="sems">
                @foreach($sem as $sem)
                <option>{{$sem->tahun_ajaran}} - {{$sem->semester}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-success">Generate Excel</button>
          </form>
      </div>
      <br>
      <div class="blok">
        <h3>2. Upload Nilai</h3>
        <form action="/postexe" method="post">
          @csrf
          <a href="#">Klik disini untuk upload file excel</a>
        </form>  
      </div>
    </div>     
  </div>
  <div class="tab-pane container fade" id="menu2">...</div>
  <div class="tab-pane container fade" id="menu3">
    <div class="row">
      <div class="blok">
        <form method="post" action="/submitnilai">
          @csrf
          <div class="form-group">
          <label for="mpc">Mata Pelajaran</label>
            <select class="form-control" id="mpc" name="mpc">
              @foreach($mps as $mps)
              <option>{{$mps->pelajaran}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="cat">Jenis Nilai</label>
            <select class="form-control" id="cat" name="cat">
              <option>Ulangan Harian</option>
              <option>Psikomotorik</option>
              <option>Afektif</option>
              <option>UTS</option>
              <option>UAS</option>
            </select>
          </div>
          <div class="form-group">
          <label for="mpc">Tahun Ajaran - Semester</label>
            <select class="form-control" id="sems" name="sems">
              @foreach($sems as $sems)
              <option>{{$sems->tahun_ajaran}} - {{$sems->semester}}</option>
              @endforeach
            </select>
          </div>
          @foreach($nilai as $nilai)
          <div class="form-group">
            <label>{{$nilai->no_induk_siswa}}</label>
            <input type="number" name="nilai1">
          </div>
          @endforeach
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
@stop