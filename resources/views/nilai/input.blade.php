@extends('layouts.master')

@section('title','Input Nilai')
@section('header','Input Nilai')

@section('content')
  <div class="row">
    <div class="blok">
      <form method="post" action="/submitnilai">
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
        @foreach($nilai as $nilai)
        <div class="form-group">
          <label>{{$nilai->no_induk_siswa}}</label>
          <input type="number" name="nilai1">
        </div>
        @endforeach
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
    <br> 
  </div>
  <br>
@stop