@extends('layouts.mhs')
@section('judul','PENGAJUAN SURAT KETERANGAN')

@section('content')
<div class="card card-info card-outline">
<h3>Pengajuan Surat Keterangan</h3>
    <div class="card-header">
        <div class="card-tools">
            <a href="/skp/input" class="btn btn-success">Tambah Data<i class="far fa-save pr-2"></i></a>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>lembaga</th>
                <th>status</th>
            </tr>
            @foreach ($data_skp as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $key->lembaga}}</td>
                <td>
                    @if ($key->status_skp == 0)
                        Belum Disetujui
                    @else
                        Sudah Disetujui
                    @endif
                </td>
            </tr>
            @endforeach       
        </table>
    </div>        
</div>
@endsection