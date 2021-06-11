@extends('layouts.mhs')
@section('judul','JADWAL UJIAN')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Ujian Pra KP</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            
        </div>
        <div class="margin">
        <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Daftar Ujian</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/kp_ujian">Ujian Kp</a></li>
                    <li><a href="/pkp_ujian">Ujian Pra Kp</a></li>
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
                      <th>Jadwal Ujian</th>
                      <th>Ruang Ujian</th>
                      <th>Dosen Penguji</th>
                      
                  </tr>
                
                  @foreach ($data_pkp as $key)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->nim}}</td>
                      <td>{{ $key->nama}}</td>
                      <td>{{ $key->judul}}</td>
                      <td>{{ $key->lembaga}}</td>
                      <td>{{ $key->jadwal}}</td>
                      <td>
                      @if ($key->ruangan == 1)
                        Didaktos 1.1
                      @elseif ($key->ruangan == 2)
                        Didaktos 1.2
                      @elseif ($key->ruangan == 3)
                        Didaktos 1.3
                      @else
                        Belum Diatur
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
                  </tr>
                  @endforeach  
                </table>
             </div>
              
          </div>
          
</div>
@endsection