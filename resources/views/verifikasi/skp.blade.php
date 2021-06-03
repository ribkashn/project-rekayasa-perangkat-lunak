@extends('layouts.koor') 
@section('judul','STATUS VERIFIKASI')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
  <div class="card card-info card-outline">
    <h3>Verifikasi Surat Keterangan</h3>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Lembaga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data_skp as $key)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $key->nim}}</td>
                    <td>{{ $key->lembaga}}</td>
                    <td>
                    @if ($key->status_skp == 1)
                        Disetujui
                    @elseif ($key->status_skp == 2)
                        Tidak Disetujui
                    @else
                        diproses
                    @endif
                    </td>
                    <td>
                        <a href="/verifikasi_skp/editskp/{{$key->id_skp}}" class="btn btn-success">Edit Status</a> | <a href="#" class="btn btn-danger">Tolak</i>
                    </td>
                </tr>
                @endforeach     
            </table>
        </div>        
</div>
@endsection