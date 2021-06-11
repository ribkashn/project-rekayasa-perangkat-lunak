@extends('layouts.koor')
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
    <form action="/verifikasi_pkp/update/{{$data_pkp->id_pkp}}" method="POST">
        {{csrf_field()}}
     <div class="form-group">
     <h3>Verifikasi Status PKP</h3>
        <div class="form-group">
            <label for="" class="font-weight-bold">Semester</label>
                   <select class="form-control " name="semester" id="semester" value="{{ $data_pkp->semester }}" readonly >
                        <option value="1">Gasal</option>
                        <option value="2">Genap</option>
                    </select>
                    
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Tahun</label>
            <input type="text" class="form-control " name="tahun" id="tahun" value="{{ $data_pkp->tahun }}" readonly>
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control " name="nim" id="nim" value="{{ $data_pkp->nim }}" readonly>
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Judul Kerja Praktik</label>
            <input type="text" class="form-control " name="judul" id="judul" value="{{ $data_pkp->judul }}" readonly>
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tools</label>
            <input name="tools"type="text" class="form-control " id="tools" value="{{ $data_pkp->tools }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Spesifikasi</label>
            <input name="spek"type="text" class="form-control " id="spek" value="{{ $data_pkp->spek }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Lembaga</label>
          <input name="lembaga"type="text" class="form-control " id="lembaga" value="{{ $data_pkp->lembaga }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Pimpinan</label>
            <input name="pimpinan"type="text" class="form-control " id="pimpinan" value="{{ $data_pkp->pimpinan }}" readonly>
        </div> 
                <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input name="no_telp"type="text" class="form-control " id="no_telp" value="{{ $data_pkp->no_telp }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat"type="text" class="form-control " id="alamat" value="{{ $data_pkp->alamat }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fax</label>
            <input name="fax"type="text" class="form-control " id="fax" value="{{ $data_pkp->fax }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Dokumen</label>
            <input name="dokumen"type="file" class="form-control" id="dokumen" value="{{ $data_pkp->dokumen }}" readonly>
        </div>
        <div class="form-group">
            <label for="" class="font-weight-bold">Status</label>
                   <select class="form-control " name="status_pkp" id="status_pkp" >
                        <option value="1">Disetujui</option>
                        <option value="2">Ditolak</option>
                    </select>
                    
        </div>      
    </div>
  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </form>
 </div>
</div>
@endsection