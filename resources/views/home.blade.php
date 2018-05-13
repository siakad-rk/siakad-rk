@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('content')
  @if(Auth::user()->kode=="GUR")
    <div align="right" style="padding: 10px">
      <a href="#" class="btn btn-basic">Tambah Pengumuman</a>
    </div>
  @endif
  <div class="panel-group">
    <div class="panel panel-danger class">
      <div class="panel-heading">PENGUMUMAN ULANGAN HARIAN TIK</div>
      <div class="panel-body">
        Kelas Pak Rio Anindita akan mengadakan ulangan harian, yang akan diadakan pada:<br><br>
          <t>Hari: Jumat, 30 September 2018</t><br>
          <t>Bahan: HTML, CSS, PHP, dan Bootstrap</t> <br><br>
        Dimohon untuk para peserta ujian memperisapkan ujian dengan baik.<br><br>
        TTD,<br>
        Rio Anindita Pratama<br>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">TUGAS TIK</div>
    <div class="panel-body">
      Buatlah sebuah web sederhana menggunakan HTML dan CSS!<br>
      Dikumpulkan pada:<br><br>
      Hari: Sabtu, 5 Desember 2018 <br>
    </div>
    </div>
  </div>
@stop
