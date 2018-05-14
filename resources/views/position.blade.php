@extends('layouts.master')

@section('title','Ganti posisi')
@section('header','Ganti posisi dosen')

@section('content')
	<table class="table table-bordered table-striped" style="text-align:center;">
  <tr>
      <td><b>No.</b></td>
      <td><b>Nama dosen</b></td>
      <td><b>Posisi</b></td>
  </tr>
  <?php $a = 1 ?> 
  @foreach($dosen as $dosen)
  <tr>
  	<td>{{$a}}</td>
    <td>{{$dosen->name}}</td>
    <td>{{$dosen->posisi}}</td>
  </tr>
  <?php $a = $a+1 ?>
  @endforeach
</table>
@stop