@extends('layouts.template')

@section('title', 'Hasil')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Hasil Ujian</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Benar</th>
          <th>Salah</th>
          <th>Kosong</th>
          <th>Nilai</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        
        </tbody>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Benar</th>
          <th>Salah</th>
          <th>Kosong</th>
          <th>Nilai</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection