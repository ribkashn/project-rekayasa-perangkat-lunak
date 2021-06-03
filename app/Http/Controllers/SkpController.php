<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\skpModel;
use Illuminate\Http\Request;

class SkpController extends Controller
{
    public function index()
    {
       $data_skp = skpModel::all();
        return view('skp.skp',compact('data_skp'));
    }
    public function input()
    {
        return view('skp.tambahskp');
    }

    public function simpan(Request $request)
    {
        skpModel::create($request->all());
        //([
        //    'semester' => $request->semester,
        //    'tahun' => $request->tahun,
        //    'nim' => $request->nim,
        //    'lembaga' => $request->lembaga,
        //    'pimpinan' => $request->pimpinan,
        //    'no_telp' => $request->no_telp,
        //    'alamat' => $request->alamat,
        //    'fax' => $request->fax,
        //    'dokumen' => $request->dokumen,
        //    'status_skp' =>0
        //]);
        return redirect('/skp');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
