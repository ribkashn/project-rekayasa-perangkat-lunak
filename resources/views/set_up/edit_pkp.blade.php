@extends('layouts.koor') 
@section('judul','Pelaksanaan Pra Kp')

@section('content')
<div class="container-xl">

</div>
<div class="row">
    <form action="/batas_pkp/update/{{$data_pkp->id_pkp}}" method="POST" class="form-horizontal">
    {{csrf_field()}}
        <div class="form-group">
            <div class="box box-default color-palette-box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-tag"></i> Pengaturan Pelaksanaan Batas Pra KP</h3>
                    </div>
                        <div class="box-body">

                            <!-- /.col -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mulai Pelaksanaan Pra Kp</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="batas_awal" name="batas_awal" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Batas Pelaksanaan Pra Kp</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="batas_akhir" name="batas_akhir" >
                                </div>
                            </div>
                           <!-- <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Dosen Penguji</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="dosen_id" name="dosen_id" value="{{ $data_pkp->dosen_id }}" readonly >
                                </div>
                            </div> -->
                            
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