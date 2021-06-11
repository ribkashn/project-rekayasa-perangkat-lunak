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
    <h3>Verifikasi Pra Kp</h3>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Lembaga</th>
                    <th>Judul</th>
                    <th>Pembimbing</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data_pkp as $key)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $key->nim}}</td>
                    <td>{{ $key->lembaga}}</td>
                    <td>{{ $key->judul}}</td>
                    <td>
                    </td>
                    <td>@if ($key->status_pkp == 1)
                            Disetujui
                        @elseif ($key->status_pkp == 2)
                            Tidak Disetujui
                        @else
                            diproses
                        @endif
                    </td>
                    <td>
                        <a href="/verifikasi_pkp/editpkp/{{$key->id_pkp}}" class="btn btn-success">Edit Status</a></i>
                    </td>
                </tr>
                @endforeach     
            </table>
        </div>        
</div>
@endsection