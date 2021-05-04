@extends('layouts.template')

@section('title', 'Hasil Ujian')
@section('content')
<div class="card">
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
            <?php $no=1; ?>
            @foreach ($hasil as $item)
            <tr>
                <td class="text-center">
                  {{ $no++ }}
                </td>
                <td>
                    {{ $item->username }}
                </td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->benar }}
                </td>
                <td>
                    {{ $item->salah }}
                </td>
                <td>
                    {{ $item->kosong }}
                </td>
                <td>
                    {{ $item->nilai }}
                </td>
                <td>
                    {{ $item->tanggal }}
                </td>
                <td>
                    {{ $item->keterangan }}
                </td>
                <td class="project-actions text-center">
                    <a class="btn btn-danger btn-sm swalDefaultSuccess" href="{{ $item->id }}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>        
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection