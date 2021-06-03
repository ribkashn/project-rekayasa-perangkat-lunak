<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pkpModel;
use Illuminate\Http\Request;

class PkpController extends Controller
{
    public function index()
    {
       $data_pkp = pkpModel::all();
        return view('pkp.pkp',compact('data_pkp'));
    }
    public function input()
    {
        return view('pkp.tambahpkp');
    }

    public function simpan(Request $request)
    {
        pkpModel::create($request->all());
        //([
          //  'semester' => $request->semester,
         //   'tahun' => $request->tahun,
         //   'nim' => $request->nim,
         //   'judul' => $request->judul,
         //   'tools' => $request->tools,
         //   'spek' => $request->spek,
         //   'lembaga' => $request->lembaga,
          //  'pimpinan' => $request->pimpinan,
         //   'no_telp' => $request->no_telp,
         //   'alamat' => $request->alamat,
         //   'fax' => $request->fax,
         //   'dokumen' => $request->dokumen,
        //    'status_pkp' =>0,
        //    'dosen_id' =>0
        //]);
        return redirect('/pkp')->with('toast_success', 'Data Berhasil Disimpan');
    }
    public function edit($id_pkp){
        $data_pkp = pkpModel::findorfail($id_pkp);
        return view('pkp.editpkp',compact('data_pkp'));
    }

    public function update(Request $request, $id_pkp)
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->update($request->all());
        return redirect('/pkp')->with('toast_success', 'Data Berhasil Diubah');
    }

    public function delete($id_pkp)
    {
        $data_pkp = pkpModel::findorfail($id_pkp);
        $data_pkp->delete();
        return redirect('/pkp')->with('toast_success', 'Data Berhasil Dihapus');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
