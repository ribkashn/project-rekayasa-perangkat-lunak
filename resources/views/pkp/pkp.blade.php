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
                <th>Judul</th>
                <th>Lembaga</th>
                <th>Status</th>
                <th>Pembimbing</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data_pkp as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key->judul}}</td>
                <td>{{ $key->lembaga}}</td>
                <td>
                    @if ($key->status_pkp == 0)
                        Belum Disetujui
                    @else
                        Sudah Disetujui
                    @endif
                </td>
                <td>
                    @if ($key->dosen_id == 0)
                        -
                    @else
                        {{$key->dosen_id}}
                    @endif
                </td>
                <td>
                <a href="/pkp/editpkp/{{$key->id_pkp}}" class="btn btn-success">Edit</a> | <a href="/pkp/deletepkp/{{$key->id_pkp}}" class="btn btn-danger">Hapus</i>
                </td>
            </tr>
            @endforeach       
        </table>
    </div>        
</div>
@endsection