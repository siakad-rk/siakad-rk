@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('content')
  @if(Auth::user()->kode=="GUR")
    <div align="right" style="padding: 10px">
      <a href="/addAnnounce" class="btn btn-basic">Tambah Pengumuman</a>
    </div>
  @endif
  <div class="panel-group">
    @foreach($an as $an)
      @if(substr($an->kodeP,0,2)=='UH')
        <div class="panel panel-warning">
      @elseif(substr($an->kodeP,0,2)=='TG')
        <div class="panel panel-success">
      @elseif(substr($an->kodeP,0,2)=='FP')
        <div class="panel panel-danger">
      @elseif(substr($an->kodeP,0,2)=='GE')
        <div class="panel panel-info">    
      @endif
          <div class="panel-heading">{{$an->title}} </div>
          <div class="panel-body">{{$an->description}} </div>
          <div class="panel-footer">{{$an->users->name}} </div>
        </div> 
    @endforeach
  </div>
@stop
