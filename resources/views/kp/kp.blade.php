@extends('layouts.mhs')
@section('judul','PENGAJUAN KP')

@section('content')
<div class="card card-info card-outline">
<h3>Pengajuan  Kp</h3>
    <div class="card-header">
        <div class="card-tools">
            <a href="/kp/input" class="btn btn-success">Tambah Data<i class="far fa-save pr-2"></i></a>

        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>judul</th>
                <th>lembaga</th>
                <th>status</th>
                <th>Pembimbing</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data_kp as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key->judul}}</td>
                <td>{{ $key->lembaga}}</td>
                <td>
                    @if ($key->status_kp == 0)
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
                <a href="/kp/editkp/{{$key->id_kp}}" class="btn btn-success">Edit</a> | <a href="/kp/deletekp/{{$key->id_kp}}" class="btn btn-danger">Hapus</i>
                </td>
            </tr>
            @endforeach       
        </table>
    </div>        
</div>
@endsection