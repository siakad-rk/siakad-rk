@extends('layouts.master')

@section('title','Tambah Pengumuman')

@section('header','Tambah Pengumuman')

@section('content')
<form action="/addAnnounce" method="POST">
  <label for="cat">Keperluan</label>
  <div class="form-group">
    <select class="form-control" id="cat">
      <option>Ulangan Harian</option>
      <option>Tugas</option>
      <option>UTS/UAS</option>
      <option>Umum</option>
    </select>
  </div>
  <div class="form-group">
    <label for="title">Judul Pengumuman</label>
    <input type="title" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="content">Isi Pengumuman</label>
    <textarea type="content" class="form-control" rows="15" id="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop