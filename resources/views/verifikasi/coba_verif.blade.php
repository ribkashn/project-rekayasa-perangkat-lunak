@extends('layouts.koor') 
@section('judul','STATUS VERIFIKASI')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
              
        </div>
        <div class="col-6">
        </div>
        
        <table class="table">
          <div>
            <td>
         <select >
           <option>Surat Keterangan KP</option>
           <option>Pra KP</option>
           <option>KP</option>
        </select >
            </td>
           </div>
          <tr>
               <th>No</th>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
               <th>Status Pengajuan</th>
               
          </tr>
          @foreach ($data_kp as $key)
          <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $key->nim}}</td>
               <td>{{ $key->nama}}</td>
               <div>
               <td>
                  <select >
                   <optio @if ($key->status_kp == 1) Disetujui @endif >Terima</option>
                   <option @if ($key->status_kp == 0) Belum Disetujui @endif>Tolak</option>
                  </select >
               </td>
               </div>
                  
            </tr>
            @endforeach 
                <div>
                  <td>
            <button type="submit" class="btn btn-primary">Save Changes</button>
                  </td>
                </div>
    </div>
@endsection
