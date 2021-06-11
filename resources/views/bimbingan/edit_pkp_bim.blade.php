@extends('layouts.dsn') 
@section('judul','Daftar Mahasiswa Bimbingan')

@section('content')
<div class="container-xl">


</div>
<div class="row">
    <form action="/pkp_bimbingan/update/{{$data_pkp->id_pkp}}" method="POST" class="form-horizontal">
    {{csrf_field()}}
        <div class="form-group">
            <div class="box box-default color-palette-box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-tag"></i> Bimbingan Pra Kp</h3>
                    </div>
                        <div class="box-body">

                            <!-- /.col -->
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Dosen Penguji</label>
                                <div class="col-sm-3">
                                        <select class="form-control" name="dosen_id" id="dosen_id ">
                                            <option value="4">Drs. Jong Jek Siang, M.Sc.</option>
                                            <option value="1">Umi Proboyekti, S.Kom, M.LIS.</option>
                                            <option value="2">Raden Bima Adi, M.Th., M.A., Ph.D.</option>
                                            <option value="3">Argo Wibowo, S.T., M.T.</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Status Pengujian</label>
                                <div class="col-sm-3">
                                        <select class="form-control" name="status_ujian" id="status_ujian ">
                                            <option value="0">Belum Disetujui</option>
                                            <option value="1">Disetujui</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data_pkp->nama }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nim</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $data_pkp->nim }}" readonly >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Judul</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $data_pkp->judul }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lembaga</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lembaga" name="lembaga" value="{{ $data_pkp->lembaga }}" readonly>
                                </div>
                            </div>
                                  

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            <!-- /.row -->
                        </div>
                    <!-- /.box-body -->
            </div>
        </div>
    </form>
</div>
@endsection