@extends('layouts.master')

@section('title','Nilai UTS dan UAS')

@section('header','Rekap Nilai UTS dan UAS')

@section('content')
@include('layouts.sems')
<table class="table table-bordered table-striped" style="text-align:center;">
  <tr>
      <td><b>No.</b></td>
      <td><b>Mata Pelajaran</b></td>
      <td><b>Nilai UTS</b></td>
      <td><b>Nilai UAS</b></td>
  </tr>
  @foreach($mp as $mp)
  <tr>
    <td>{{$mp->id}}</td>
    <td>{{$mp->pelajaran}}</td>
    <td></td>
    <td></td>
  </tr>
  @endforeach
</table>
@stop
