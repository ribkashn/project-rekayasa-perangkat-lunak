@extends('layouts.koor') 
@section('judul','Daftar Mahasiswa Bimbingan')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
  <div class="card card-info card-outline">
     
</div>

<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pengaturan Batas Pelaksanaan Pra Kp</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            
        </div>
        <div class="margin">
        <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Batas Pelaksanaan</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/batas_kp">Bimbingan Kp</a></li>
                    <li><a href="/batas_pkp">Bimbingan Pra Kp</a></li>
                  </ul>
        </div>
        </div>
 
        <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-striped">
                  <tr>
                      <th>No</th>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Judul</th>
                      <th>Lembaga</th>
                      <th>Mulai</th>
                      <th>Sampai</th>
                      <th>Aksi</th>
                      
                  </tr>
                
                  @foreach ($data_pkp as $key)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->nim}}</td>
                      <td>{{ $key->nama}}</td>
                      <td>{{ $key->judul}}</td>
                      <td>{{ $key->lembaga}}</td>
                      <td>{{ $key->batas_awal}}</td>
                      <td>{{ $key->batas_akhir}}</td>
                   
                      
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Aksi</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/batas_pkp/edit/{{$key->id_pkp}}">Edit</a></li>
                                <li><a href="#">Hapus</a></li>
                            </ul>
                        </div>
                      </td>
                  </tr>
                  @endforeach  
                </table>
             </div>
              
          </div>
          
</div>
@endsection