@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('datatables')
  $(document).ready(function() {
    $('#infolomba').DataTable();} 
  );
@stop

@section('content')
<table id="infolomba" class="table table-bordered display" style="width:100%">
  <thead>
    <tr>
      <th><b>No.</b></th>
      <th><b>Nama Lomba</b></th>
      <th><b>Tanggal Lomba</b></th>
      <th><b>Lokasi Lomba</b></th>
    </tr>
</thead>
  <tbody>
    @php
      $i=1;
    @endphp
    @foreach($lombas as $lomba)   
      <tr>
        <td>{{$i++}}</td>
        <td>{{$lomba->nama}}</td>
        <td>@php echo date('d F Y', strtotime($lomba->tanggal)); @endphp</td>
        <td>{{$lomba->lokasi}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
