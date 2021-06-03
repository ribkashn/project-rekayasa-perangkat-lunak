<?php

namespace App\Http\Controllers;
use App\Models\mhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //$data_mhs = mhs::all();
        return view('layouts.mhs');//, compact('data_mhs'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mahasiswa()
    {
        $data_mhs = mhs::all();
        return view('mahasiswa.mhs',compact('data_mhs'));
    }
    public function simpan(Request $request)
    {
        mhs::create($request->all());
        return redirect('/profile')->with('toast_success', 'Data Berhasil Disimpan');
    }
    public function edit($id_mhs){
        $data_mhs = mhs::findorfail($id_mhs);
        return view('mahasiswa.update',compact('data_mhs'));
    }

    public function update(Request $request, $id_mhs)
    {
        $data_mhs = mhs::findorfail($id_mhs);
        $data_mhs->update($request->all());
        return redirect('/profile')->with('toast_success', 'Data Berhasil Diubah');
    }
    
}
