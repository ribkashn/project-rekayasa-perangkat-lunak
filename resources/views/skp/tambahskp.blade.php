@extends('layouts.mhs')
@section('judul','PENGAJUAN SURAT KETERANGAN')

@section('content')
<div class="col-md-6">
<div class="container" >
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">DONE !</h4>
    <hr>
    <p class="mb-0">Data berhasil ditambahkan !</p>     
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <h3>Pengajuan Surat Keterangan</h3>
    <form action="/skp/simpan" method="POST">
        {{csrf_field()}}
     <div class="form-group">
        <div class="form-group">
            <label for="" class="font-weight-bold">Semester</label>
                   <select class="form-control " name="semester" id="semester">
                        <option value="1">Gasal</option>
                        <option value="2">Genap</option>
                    </select>
                    
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Tahun</label>
            <input type="text" class="form-control " name="tahun" id="tahun" >
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control " name="nim" id="nim" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Lembaga</label>
          <input name="lembaga"type="text" class="form-control " id="lembaga" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pimpinan</label>
            <input name="pimpinan"type="text" class="form-control " id="pimpinan" >
        </div> 
                <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input name="no_telp"type="text" class="form-control " id="no_telp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat"type="text" class="form-control " id="alamat" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fax</label>
            <input name="fax"type="text" class="form-control " id="fax" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dokumen</label>
            <input name="dokumen"type="file" class="form-control" id="dokumen" >
        </div>        
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
</div>
@endsection