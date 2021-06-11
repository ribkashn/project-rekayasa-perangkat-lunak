@extends('layouts.mhs')
@section('judul','PENGAJUAN PRA KP')

@section('content')
<div class="card card-info card-outline">
<h3>Pengajuan Pra Kp</h3>
    <div class="card-header">
        <div class="card-tools">
            <a href="/pkp/input" class="btn btn-success">Tambah Data<i class="far fa-save pr-2"></i></a>

        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Judul</th>
                <th>Lembaga</th>
                <th>Status</th>
                
                <th>Aksi</th>
            </tr>
            @foreach ($data_pkp as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key->nim}}</td>
                <td>{{ $key->judul}}</td>
                <td>{{ $key->lembaga}}</td>
                <td>
                    @if ($key->status_skp == 1)
                        Diterima
                    @elseif ($key->status_skp == 2)
                        Ditolak
                    @else
                        Belum Diverifikasi
                    @endif
                </td>
              
                <td>
                <a href="/pkp/editpkp/{{$key->id_pkp}}" class="btn btn-success">Edit</a> | <!-- <a href="/pkp/deletepkp/{{$key->id_pkp}}" class="btn btn-danger">Hapus</i> -->
                </td>
            </tr>
            @endforeach       
        </table>
    </div>        
</div>
@endsection