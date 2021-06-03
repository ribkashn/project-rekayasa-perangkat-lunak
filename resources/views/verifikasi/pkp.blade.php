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
                    <th>Judul</th>
                    <th>Lembaga</th>
                    <th>Pembimbing</th>
                    <th>Status</th>
                </tr>
                @foreach ($data_pkp as $key)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $key->nim}}</td>
                    <td>{{ $key->judul}}</td>
                    <td>{{ $key->lembaga}}</td>  
                    <td>{{ $key->pembimbing}}</td>
                    <td>
                        <a href="/verifikasi_pkp/editpkp/{{$key->id_pkp}}" data-bs-toggle="modal" data-bs-target="#modalUpdate" >Edit Status</a>
                    </td>
                </tr>
                @endforeach    
            </table>
        </div>
</div>
<!-- Modal update -->
<div class="modal fade" id="modalUpdate" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/verifikasi_pkp/update/{{$key->id_pkp}}" method="POST">
        {{csrf_field()}}
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection