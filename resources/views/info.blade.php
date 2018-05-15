@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('content')
<table class="table table-bordered" style="text-align:center;">
  <tr>
    <td><b>No.</b></td>
    <td><b>Nama Lomba</b></td>
    <td><b>Tanggal Lomba</b></td>
    <td><b>Lokasi Lomba</b></td>
  </tr>
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
</table>
@stop
