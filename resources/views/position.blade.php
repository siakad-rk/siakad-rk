@extends('layouts.master')

@section('title','Posisi Guru')
@section('header','Posisi Guru')

@section('content')
	<table class="table table-bordered table-striped" style="text-align:center;">
  <tr>
      <td><b>No.</b></td>
      <td><b>Nama Guru</b></td>
      <td><b>Posisi</b></td>
  </tr>
  <?php $a = 1 ?> 
  @foreach($guru as $guru)
  <tr>
  	<td>{{$a}}</td>
    <td>{{$guru->name}}</td>
    <td>{{$guru->posisi}}</td>
  </tr>
  <?php $a = $a+1 ?>
  @endforeach
</table>
@stop