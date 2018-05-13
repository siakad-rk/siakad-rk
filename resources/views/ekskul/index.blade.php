@extends('layouts.master')

@section('title','Ekstrakulikuler')
@section('header','Ekstrakulikuler')

@section('content')
@if(session('user.ekskul_id')==1)
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Ekskul</button><br><br>
@else
  <div>
    Ekstrakulikuler anda: {{$ekskul_user->name}}<br><br>
  </div>
@endif
<table class="table table-bordered" style="text-align:center;">
  <tr>
    <td><b>No.</b></td>
    <td><b>Name Ekskul</b></td>
  </tr>
  @foreach($ekskul as $ekskuls)
  <tr>
    <td>{{$ekskuls->id-1}}</td>
    <td>{{$ekskuls->name}}</td>
  </tr>
  @endforeach
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/tambahekskul">
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
@stop