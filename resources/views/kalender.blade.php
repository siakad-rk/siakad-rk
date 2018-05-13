@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('content')
  @if(Auth::user()->kode=="GUR")
    <div align="right" style="padding: 10px">
      <a href="#" class="btn btn-basic">Tambah Pengumuman</a>
    </div>
  @endif
  <img src="http://www.ubaya.ac.id/up/imgplus/images/Screen%20Shot%202017-07-27%20at%202.20.14%20PM.png" height="100%">
@stop
