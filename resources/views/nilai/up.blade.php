@extends('layouts.master')

@section('title','Input/Edit Nilai')
@section('header','Input/Edit Nilai')

@section('content')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#menu1">Komunal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Per Kelas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu3">Individu</a>
  </li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane container active" id="menu1">
    <div class="row">
      <div class="blok">
        <h3>1. Buat Template Excel</h3>
        <form method="post" action="/genexecommunal">
            @csrf
            <div class="form-group">
              <label for="mpc">Mata Pelajaran</label>
              <select class="form-control" id="mpc" name="mpc">
                @foreach($mp as $mp)
                <option>{{$mp->pelajaran}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="cat">Jenis Penilaian</label>
              <select class="form-control" id="cat" name="cat">
                <option>Ulangan Harian</option>
                <option>Psikomotorik</option>
                <option>Afektif</option>
                <option>UTS</option>
                <option>UAS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="mpc">Tahun Ajaran - Semester</label>
              <select class="form-control" id="sems" name="sems">
                @foreach($sem as $sem)
                <option>{{$sem->tahun_ajaran}}-{{$sem->semester}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-success">Generate Excel</button>
          </form>
      </div>
      <br>
      <div class="blok">
        <h3>2. Upload Nilai</h3>
        <form action="/uploadexe" method="post">
          @csrf
          <div class="form-group">
            <label for="fupload">Masukkan file yang akan di upload </label>
            <input type="file" id="fupload" name="fupload"></input>
          </div>
          <button type="submit" class="btn btn-success">Upload</button>
        </form>  
      </div>
    </div>     
  </div>
  <div class="tab-pane container fade" id="menu2">
    <div class="row">
      <div class="blok">
        <h3>1. Buat Template Excel</h3>
        <form method="post" action="/genexeclass">
            @csrf
            <div class="form-group">
              <label for="mpc">Mata Pelajaran</label>
              <select class="form-control" id="mpc" name="mpc">
                @foreach($mpx as $mpx)
                <option>{{$mpx->pelajaran}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="cat">Jenis Penilaian</label>
              <select class="form-control" id="cat" name="cat">
                <option>Ulangan Harian</option>
                <option>Psikomotorik</option>
                <option>Afektif</option>
                <option>UTS</option>
                <option>UAS</option>
              </select>
            </div>
            <div class="form-group">
            <label for="cat">Penilaian ke-</label>
              <select class="form-control" id="ctr" name="ctr">
                <option>Semua</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
            <div class="form-group">
            <label for="cat">Kelas</label>
              <select class="form-control" id="kls" name="kls">
                @foreach($kelas as $kelas)
                <option>{{$kelas->nama_kelas}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="mpc">Tahun Ajaran - Semester</label>
              <select class="form-control" id="sems" name="sems">
                @foreach($semx as $semx)
                <option>{{$semx->tahun_ajaran}}-{{$semx->semester}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-success">Generate Excel</button>
          </form>
      </div>
      <br>
      <div class="blok">
        <h3>2. Upload Nilai</h3>
        <form action="/uploadexe" method="post">
          @csrf
          <div class="form-group">
            <label for="fupload">Masukkan file yang akan di upload </label>
            <input type="file" id="fupload" name="fupload"></input>
          </div>
          <button type="submit" class="btn btn-success">Upload</button>
        </form>  
      </div>
    </div>    
  </div>
  <div class="tab-pane container fade" id="menu3">
    <div class="row">
      <div class="blok">
        <form method="post" action="/submitnilai">
          @csrf
          <div class="form-group">
          <label for="mpc">Mata Pelajaran</label>
            <select class="form-control" id="mpc" name="mpc">
              @foreach($mps as $mps)
              <option>{{$mps->pelajaran}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="cat">Jenis Nilai</label>
            <select class="form-control" id="cat" name="cat">
              <option>Ulangan Harian</option>
              <option>Psikomotorik</option>
              <option>Afektif</option>
              <option>UTS</option>
              <option>UAS</option>
            </select>
          </div>
          <div class="form-group">
          <label for="mpc">Tahun Ajaran - Semester</label>
            <select class="form-control" id="sems" name="sems">
              @foreach($sems as $sems)
              <option>{{$sems->tahun_ajaran}}-{{$sems->semester}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="mpc">Nilai ke-</label>
            <select class="form-control" id="nilaike" name="nilaike">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Nilai</th>
            </tr>
          </thead>
          <tbody>
          @php
            $i = 1;
          @endphp
          @foreach($siswa as $siswa)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$siswa->no_induk}} - {{$siswa->name}}</td>
              <td><input type="number" name="nilai"></td>
            </tr>
          @endforeach
          </tbody>
          </table>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
@stop