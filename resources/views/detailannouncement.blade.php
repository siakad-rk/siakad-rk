@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('datatables')
  $(document).ready(function() {
    $('#announcement').DataTable();} 
  );
@stop

@section('content')
  <div class="panel-group">
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
    <div class="panel-body" rows="10">{{$an->description}} </div>
    <div class="panel-footer">
      Diumumkan pada: {{$an->created_at}}<br>
      Oleh: {{$an->users->name}} </div>
    </div> 
  </div>
  <div class="text-right">    
    <a href="/" class="btn btn-primary">Back</a>
  </div>
@stop