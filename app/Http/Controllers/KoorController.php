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
        return view('verifikasi.edit_pkp',compact('data_pkp'));
    }

    public function update_pkp(Request $request, $id_pkp) // update status baru
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/verifikasi_pkp')->with('toast_success', 'Data Berhasil Diubah');
    }

    
    ///// batas kp
    public function batas_kp ()
    {
        
        $data_kp = kpModel::where('status_kp','=','1')->get();
        //$data_kp = kpModel::where('status_ujian','=','1')->get();
        return view('set_up.batas_kp',compact('data_kp'));
    }
    public function setKP($id_kp) //edit
    {
        $data_kp = kpModel::findorfail($id_kp);
        return view('set_up.edit_kp',compact('data_kp'));
    }

    public function update_setkp(Request $request, $id_kp) // update status baru
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->all());
        return redirect('/batas_kp')->with('toast_success', 'Data Berhasil Diubah');

    }
    //// batas pkp
    public function batas_pkp ()
    {
        
        $data_pkp = pkpModel::where('status_pkp','=','1')->get();
        //$data_pkp = pkpModel::where('status_ujian','=','1')->get();
        return view('set_up.batas_pkp',compact('data_pkp'));
    }
    public function setPKP($id_pkp) //edit
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        return view('set_up.edit_pkp',compact('data_pkp'));
    }

    public function update_setpkp(Request $request, $id_pkp) // update status baru
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/batas_pkp')->with('toast_success', 'Data Berhasil Diubah');

    }
    // jadwal ujian kp
    public function ujianKP()
    {
        $data_kp = kpModel::where('status_ujian','=','1')->get();
        
        return view('jadwal_ujian.ujian_kp', compact('data_kp'));
    }
    public function edit_ujianKP($id_kp) //edit
    {
        $data_kp = kpModel::findorfail($id_kp);
        return view('jadwal_ujian.edit_kp',compact('data_kp'));
    }

    public function update_ujiankp(Request $request, $id_kp) // update status baru
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->all());
        return redirect('/ujian_kp')->with('toast_success', 'Data Berhasil Diubah');

    }
    // jadwal ujian pkp
    public function ujianPKP()
    {
        $data_pkp = pkpModel::where('status_ujian','=','1')->get();
        
        return view('jadwal_ujian.ujian_pkp', compact('data_pkp'));
    }
    public function edit_ujianPKP($id_pkp) //edit
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        return view('jadwal_ujian.edit_pkp',compact('data_pkp'));
    }

    public function update_ujianpkp(Request $request, $id_pkp) // update status baru
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/ujian_pkp')->with('toast_success', 'Data Berhasil Diubah');

    }
    // registrasi
    public function regis_kp()
    {
        $data_kp = kpModel::where('status_kp','=','1')->get();
        return view('registrasi.kp', compact('data_kp'));
    }
    public function regis_pkp()
    {
        $data_pkp = pkpModel::where('status_pkp','=','1')->get();
        return view('registrasi.pkp', compact('data_pkp'));
    }

}
