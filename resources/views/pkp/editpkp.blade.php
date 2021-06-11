@extends('layouts.mhs')
@section('judul','PENGAJUAN PRA KP')

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
    <form action="/pkp/update/{{$data_pkp->id_pkp}}" method="POST">
        {{csrf_field()}}
     <div class="form-group">
     <h3>Edit Data Pengajuan Pra Kp</h3>
        <div class="form-group">
            <label for="" class="font-weight-bold">Semester</label>
                   <select class="form-control " name="semester" id="semester">
                        <option value="1">Gasal</option>
                        <option value="2">Genap</option>
                    </select>
                    
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Tahun</label>
            <input type="text" class="form-control " name="tahun" id="tahun" value="{{ $data_pkp->tahun }}" >
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control " name="nim" id="nim" value="{{ $data_pkp->nim }}">
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Nama</label>
            <input type="text" class="form-control " name="nama" id="nama" value="{{ $data_pkp->nama }}">
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Judul Kerja Praktik</label>
            <textarea name="judul" id="" cols="30" rows="3" class="form-control " name="judul" id="judul" value="{{ $data_pkp->judul }}"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tools</label>
            <input name="tools"type="text" class="form-control " id="tools" value="{{ $data_pkp->tools }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Spesifikasi</label>
            <input name="spek"type="text" class="form-control " id="spek" value="{{ $data_pkp->spek }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Lembaga</label>
          <input name="lembaga"type="text" class="form-control " id="lembaga" value="{{ $data_pkp->lembaga }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pimpinan</label>
            <input name="pimpinan"type="text" class="form-control " id="pimpinan" value="{{ $data_pkp->pimpinan }}">
        </div> 
                <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input name="no_telp"type="text" class="form-control " id="no_telp" value="{{ $data_pkp->no_telp }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat"type="text" class="form-control " id="alamat" value="{{ $data_pkp->alamat }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fax</label>
            <input name="fax"type="text" class="form-control " id="fax" value="{{ $data_pkp->fax }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dokumen</label>
            <input name="dokumen"type="file" class="form-control" id="dokumen" >
        </div>        
    </div>
  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </form>
 </div>
</div>
@endsection