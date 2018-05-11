@extends('layouts.master')

@section('title','Nilai Ulangan Harian')
@section('header')
  <h1>Rekap Nilai Ulangan Harian</h1>
@stop
@section('content')
<table class="table table-bordered" style="text-align:center;">
  <tr>
    <td rowspan="2">No.</td>
    <td rowspan="2">Mata Pelajaran</td>
    <td colspan="7">Nilai Ulangan Harian</td>
    <td rowspan="2" style="width:125px;word-wrap: break-word;">Jumlah Ulangan Harian</td>
    <td rowspan="2">Rata-rata</td>
  </tr>
  <tr>
    @for($i=1;$i<=7;$i++)
      <td>{{ $i }}</td>
    @endfor
  </tr>
  @foreach($mp as $mp)
  <tr>
    <td>{{$mp->id}}</td>
    <td>{{$mp->pelajaran}}</td>
    @for($i=1;$i<=7;$i++)
      <td>0</td>
    @endfor
    <td>0</td>
    <td>0</td>
  </tr>
  @endforeach
</table>
@stop
