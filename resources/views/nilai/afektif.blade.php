@extends('layouts.master')

@section('title','Nilai Afektif')

@section('header')
  <h1>Rekap Nilai Afektif</h1>
@stop

@section('content')
<table class="table table-bordered table-striped" style="text-align:center;">
  <tr>
      <td><b>No.</b></td>
      <td><b>Mata Pelajaran</b></td>
      <td><b>Nilai Afektif</b></td>
      <td><b>Nilai Huruf</b></td>
  </tr>
  @foreach($mp as $mp)
  <tr>
    <td>{{$mp->id}}</td>
    <td>{{$mp->pelajaran}}</td>
    <td>0</td>
    <td>E</td>
  </tr>
  @endforeach
</table>
@stop
