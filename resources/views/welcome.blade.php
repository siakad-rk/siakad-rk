@extends('layouts.base')

@section('title','Sistem Informasi Akademik')

@section('content')
  <div class="login-form">
    <form>
      <div class="form-group">
        <label for="NoInduk">Nomor Induk</label>
        <input type="text" class="form-control" id="noInduk">
      </div>
      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" class="form-control" id="password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
@stop
