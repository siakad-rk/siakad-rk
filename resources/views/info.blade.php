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
    <tr>
      <td>1</td>
      <td>Industrial Games</td>
      <td>20 - 22 Mei 2018</td>
      <td>T. Industri Ubaya</td>
    </tr>
    <tr>
      <td>2</td>
      <td>NLC</td>
      <td>30 Mei 2018</td>
      <td>Informatika ITS</td>
    </tr>
    <tr>
      <td>3</td>
      <td>NPC</td>
      <td>4 Juni 2018</td>
      <td>Informatika ITS</td>
    </tr>
    <tr>
      <td>4</td>
      <td>OMITS</td>
      <td>25 Juni 2018</td>
      <td>Matematika ITS</td>
    </tr>
  </tbody>
</table>
@stop
