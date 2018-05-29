@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('datatables')
  $(document).ready(function() {
    $('#announcement').DataTable();} 
  );
@stop

@section('content')

  @if(session('message'))
  <div class="alert {{session('alert-class')}} alert-dismissible"">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session('message')}}
  </div>
  @endif
  @if(Auth::user()->kode=="GUR")
    <div align="right" style="padding: 10px">
      <a href="/addAnnounce" class="btn btn-basic">Tambah Pengumuman</a>
    </div>
  @endif
  <table id="announcement" class="table table-bordered display" style="width:100%">
    <thead>
      <tr>
        <th><b>No.</b></th>
        <th><b>Judul</b></th>
        <th><b>Tipe</b></th>
        <th><b>Oleh</b></th>
        <th><b>Diumumkan pada</b></th>
        <th><b>Action</b></th>
      </tr>
  </thead>
    <tbody>
      @php
        $i=1;
      @endphp
      @foreach($an as $an)  
        <tr>
          <td>{{$i++}}</td>
          <td>{{$an->title}}</td>
          <td>
            @if(substr($an->kodeP,0,2)=='UH')
              Ulangan Harian
            @elseif(substr($an->kodeP,0,2)=='TG')
              Tugas
            @elseif(substr($an->kodeP,0,2)=='FP')
              UTS/UAS
            @elseif(substr($an->kodeP,0,2)=='GE')
              Umum
            @endif
          </td>
          <td>{{$an->users->name}}</td>
          <td>{{$an->created_at}}</td>
          <td><a href="/pengumuman/{{$an->kodeP}}" class="btn btn-primary">Detail</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop
