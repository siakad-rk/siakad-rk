@extends('layouts.master')

@section('title','Home')
@section('header','Pengumuman')

@section('datatables')
  $(document).ready(function() {
    $('#infolomba').DataTable();} 
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
  <div class="row" style="margin-bottom: 10px;">
    <div class="col-md-2 col-md-offset-10">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah lomba</button>
    </div>
  </div>
@endif

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

<!-- Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Member</h4>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop