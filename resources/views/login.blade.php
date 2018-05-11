@extends('layouts.base')

@section('title','Sistem Informasi Akademik')

@section('content')
  <div class="login-form">
    <form method="post" action="/login">
      @csrf
      <div class="form-group">
        <label for="NoInduk">Nomor Induk</label>
        <input type="text" class="form-control" id="no_induk" name="no_induk">
      </div>
      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
@stop
