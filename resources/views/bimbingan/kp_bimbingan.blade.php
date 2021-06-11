@extends('layouts.dsn') 
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
            <h3 class="box-title">Daftar Mahasiswa Bimbingan Kp</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            
        </div>
        <div class="margin">
        <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Daftar Bimbingan</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/kp_bimbingan">Bimbingan Kp</a></li>
                    <li><a href="/pkp_bimbingan">Bimbingan Pra Kp</a></li>
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
                      <th>Pengajuan Ujian</th>
                      <th>Dosen Penguji</th>
                      <th>Aksi</th>
                      
                  </tr>
                
                  @foreach ($data_kp as $key)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->nim}}</td>
                      <td>{{ $key->nama}}</td>
                      <td>{{ $key->judul}}</td>
                      <td>{{ $key->lembaga}}</td>
                      <td>
                      @if ($key->status_ujian == 1)
                        Disetujui
                      @else
                        -
                      @endif
                      </td>
                      <td>
                      @if ($key->dosen_id == 1)
                        Umi Proboyekti, S.Kom, M.LIS.
                      @elseif ($key->dosen_id == 2)
                        Raden Bima Adi, M.Th., M.A., Ph.D.
                      @elseif ($key->dosen_id == 3)
                        Argo Wibowo, S.T., M.T.
                      @elseif ($key->dosen_id == 4)
                      Drs. Jong Jek Siang, M.Sc.
                      @else
                        Belum Diatur
                      @endif
                      </td>
                   
                      
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Aksi</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/kp_bimbingan/edit/{{$key->id_kp}}">Edit</a></li>
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