<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kpModel;
use App\Models\skpModel;
use App\Models\pkpModel;

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


    public function verifikasiSKP() //tampilkan
    {
        $data_skp = skpModel::all();
        return view('verifikasi.skp', compact('data_skp'));

    }

    public function statusSKP($id_skp) //edit
    {
        $data_skp = skpModel::findorfail($id_skp);
        return view('verifikasi.edit_skp',compact('data_skp'));
    }

    public function update_skp(Request $request, $id_skp) // update status baru
    {
        $data_skp = skpModel::findorfail($id_skp);
        $data_skp->update($request->all());
        return redirect('/verifikasi_skp')->with('toast_success', 'Data Berhasil Diubah');

    }

    public function verifikasiKP()
    {
        $data_kp = kpModel::all();
        return view('verifikasi.kp', compact('data_kp'));
    }
    public function statusKP($id_kp) //edit
    {
        $data_kp = kpModel::findorfail($id_kp);
        return view('verifikasi.edit_kp',compact('data_kp'));
    }

    public function update_kp(Request $request, $id_kp) // update status baru
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->all());
        return redirect('/verifikasi_kp')->with('toast_success', 'Data Berhasil Diubah');

    }

    public function verifikasiPKP()
    {
        $data_pkp = pkpModel::all();
        return view('verifikasi.pkp', compact('data_pkp'));
    }

    public function statusPKP($id_pkp) //edit
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        return view('verifikasi.pkp',compact('data_pkp'));
    }

    public function update_pkp(Request $request, $id_pkp) // update status baru
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/verifikasi_pkp')->with('toast_success', 'Data Berhasil Diubah');


    }

}
