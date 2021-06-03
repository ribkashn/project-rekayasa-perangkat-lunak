@extends('layouts.koor') 
@section('judul','Daftar Mahasiswa Bimbingan')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
  <div class="card card-info card-outline">
     
</div>
@endsection