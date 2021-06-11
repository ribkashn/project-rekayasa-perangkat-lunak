<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kpModel;
use App\Models\skpModel;
use App\Models\pkpModel;

use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index()
    {
        return view('layouts.dsn');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kp_bimbingan ()
    {
        
        $data_kp = kpModel::where('status_kp','=','1')->get();
        return view('bimbingan.kp_bimbingan',compact('data_kp'));
    }
    public function bimbinganKP($id_kp) //edit
    {
        $data_kp = kpModel::findorfail($id_kp);
        return view('bimbingan.edit_kp_bim',compact('data_kp'));
    }

    public function bimbingan_update_kp(Request $request, $id_kp) // update status baru
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->all());
        return redirect('/kp_bimbingan')->with('toast_success', 'Data Berhasil Diubah');

    }

    public function pkp_bimbingan ()
    {
        $data_pkp = pkpModel::where('status_pkp','=','1')->get();
        return view('bimbingan.pkp_bimbingan',compact('data_pkp'));
    }
    public function bimbinganPKP($id_pkp) //edit
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        return view('bimbingan.edit_pkp_bim',compact('data_pkp'));
    }

    public function bimbingan_update_pkp(Request $request, $id_pkp) // update status baru
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/pkp_bimbingan')->with('toast_success', 'Data Berhasil Diubah');

    }
    //ujian
    public function daf_ujianKP()
    {
        $data_kp = kpModel::where('status_ujian','=','1')->get();
        return view('ujian_dosen.ujian_kp', compact('data_kp'));
    }
    public function daf_ujianPKP()
    {
        $data_pkp = pkpModel::where('status_ujian','=','1')->get();
        return view('ujian_dosen.ujian_pkp', compact('data_pkp'));
    }
}
