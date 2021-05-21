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
        <div class="card-body">
         <table class="table table-bordered table-striped">
          <tr>
               <th>No</th>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
               <th>Status Pengajuan</th>
               
          </tr>
         
          <tr>
               <td></td>
               <td></td>
               <td></td>
               <div>
               <td>
                  <select >
                   <option >Terima</option>
                   <option >Tolak</option>
                  </select >
               </td>
               </div>
                  
          </tr>
         </table>
        </div>
  
            
                <div>
                  <td>
            <button type="submit" class="btn btn-primary">Save Changes</button>
                  </td>
                </div>
    </div>
@endsection
