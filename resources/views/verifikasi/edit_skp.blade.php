@extends('layouts.mhs')
@section('judul','Verifikasi Surat Keterangan')

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
    <form action="/verifikasi_skp/update/{{$data_skp->id_skp}}" method="POST">
        {{csrf_field()}}
     <div class="form-group">
     <h3>Verifikasi Status Surat Keterangan</h3>
        <div class="form-group">
            <label for="" class="font-weight-bold">Semester</label>
                   <select class="form-control " name="semester" id="semester" value="{{ $data_skp->semester }}" readonly >
                        <option value="1">Gasal</option>
                        <option value="2">Genap</option>
                    </select>
                    
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Tahun</label>
            <input type="text" class="form-control " name="tahun" id="tahun" value="{{ $data_skp->tahun }}" readonly>
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control " name="nim" id="nim" value="{{ $data_skp->nim }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Lembaga</label>
          <input name="lembaga"type="text" class="form-control " id="lembaga" value="{{ $data_skp->lembaga }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pimpinan</label>
            <input name="pimpinan"type="text" class="form-control " id="pimpinan" value="{{ $data_skp->pimpinan }}" readonly>
        </div> 
                <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input name="no_telp"type="text" class="form-control " id="no_telp" value="{{ $data_skp->no_telp }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat"type="text" class="form-control " id="alamat" value="{{ $data_skp->alamat }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fax</label>
            <input name="fax"type="text" class="form-control " id="fax" value="{{ $data_skp->fax }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dokumen</label>
            <input name="dokumen"type="file" class="form-control" id="dokumen" value="{{ $data_skp->dokumen }}" readonly>
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Status</label>
                   <select class="form-control " name="status_skp" id="status_skp" >
                        <option value="2">Ditolak</option>
                        <option value="1">Diterima</option>
                    </select>
                    
        </div>      
    </div>
  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </form>
 </div>
</div>
@endsection