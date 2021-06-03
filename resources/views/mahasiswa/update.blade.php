@extends('layouts.mhs')
@section('judul','PROFILE')

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
    <form action="/mhs/update/{{$data_mhs->id_mhs}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <h3>Profile Mahasiswa</h3>
            <div class="form-group">
                <label for="" class="font-weight-bold">Nim</label>
                <input type="text" class="form-control " name="nim" id="nim" value="{{ $data_mhs->nim }}" >
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold">Nama</label>
                <input type="text" class="form-control " name="nama" id="nama" value="{{ $data_mhs->nama }}">
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold">Email</label>
                <input type="text" class="form-control " name="email" id="email" value="{{ $data_mhs->email }}">
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold">Semester</label>
                    <select class="form-control " name="semester" id="semester"value="{{ $data_mhs->semester }}">
                            <option value="1">Gasal</option>
                            <option value="2">Genap</option>
                        </select>
            
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
 </div>
</div>
@endsection