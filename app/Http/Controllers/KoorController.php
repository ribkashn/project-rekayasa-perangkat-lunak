<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kpModel;
class KoorController extends Controller
{
    public function index()
    {
        return view('layouts.koor');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_verifikasiKp($id_kp)
    {
        $data_kp = kpModel::findorfail($id_kp)->where('status_kp', '=', '0')->get()->toArray();
        return view('verifikasi.verif',compact('data_kp'));
    }

    public function verifKp(Request $request, $id_kp)
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->get('id_kp'))->update(['status_kp' =>1]);
        return redirect('/verifikasi')->with('success', 'Data Berhasil diubah');
    }

}
