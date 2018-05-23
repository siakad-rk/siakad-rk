@extends('layouts.master')

@section('title','Input Nilai')
@section('header','Input Nilai')

@section('content')
  <div class="row">
    <div class="blok">
      <h3>1. Buat Template Excel</h3>
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
  <br>
@stop