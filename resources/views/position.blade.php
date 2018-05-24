@extends('layouts.master')

@section('title','Posisi Guru')
@section('header','Posisi Guru')

@section('datatables')
  $(document).ready(function() {
    $('#posisi').DataTable();} 
  );
@stop

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">      
      <table id="posisi" class="table table-bordered display" style="text-align:center;">
      <thead>
        <tr>
          <td width="10%"><b>No.</b></td>
          <td><b>Nama Guru</b></td>
          <td><b>Posisi</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach($guru as $key => $guru)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$guru->name}}</td>
          <td>{{$guru->posisi}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
@stop