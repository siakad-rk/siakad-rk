@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('content')

@if(session('message'))
<div class="alert {{session('alert-class')}} alert-dismissible"">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{session('message')}}
</div>
@endif
<form method="POST" action="/addinfo">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Nama Lomba</label>
    <input type="text" name="nama" class="form-control" id="" placeholder="Nama lomba">
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" name="tanggal" class="form-control" id="" placeholder="tanggal">
  </div>
  <div class="form-group">
    <label>Lokasi</label>
    <input type="text" name="lokasi" class="form-control" id="" placeholder="Lokasi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop
