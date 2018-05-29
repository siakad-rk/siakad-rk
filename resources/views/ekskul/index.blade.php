@extends('layouts.master')

@section('title','Ekstrakulikuler')
@section('header','Ekstrakulikuler')

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

<div class="row">
  <div class="col-md-8 col-md-offset-2">    
    @if(!isset($ekskul_user->name) && Auth::user()->kode!="GUR")
      <div class="text-right">        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daftarModal">Daftar Ekskul</button><br><br>
      </div>
    @elseif (isset($ekskul_user->name))
      <div class="text-right">       
        Ekstrakulikuler anda: {{$ekskul_user->name}}<br><br>
      </div>
    @elseif (Auth::user()->kode=="GUR")
      <div class="text-right">        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEkskulModal">Tambah Ekskul</button><br><br>
      </div>
    @endif
    <table id="infolomba" class="table table-bordered display" style="text-align:center;">
      <thead>
        <tr>
          <td width="10%"><b>No.</b></td>
          <td><b>Name Ekskul</b></td>
        </tr>
      </thead>
      <tbody>
        @foreach($ekskul as $ekskuls)
        @if(isset($ekskul_user->name) && $ekskuls->name==$ekskul_user->name)
          <tr bgcolor="FF0000">
        @else
          <tr>
        @endif
          <td>{{$ekskuls->id-1}}</td>
          <td>{{$ekskuls->name}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Ekskul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/daftarekskul">
          {{ csrf_field() }}
          <div class="form-group">
            <select name="id" class="form-control">
              @foreach($ekskul as $ekskuls)
                <option value="{{$ekskuls->id}}">{{$ekskuls->name}}</option>   
              @endforeach
            </select>
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addEkskulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Ekskul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/tambahekskul">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Nama ekskul</label>
            <input type="text" name="name" class="form-control">
          </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
@stop