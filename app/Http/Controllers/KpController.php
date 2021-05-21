<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\kpModel;
class KpController extends Controller
{
    /*public function index()
    {
        return view('kp.kp'); //(folder/file view)
    }
    public function index_kp(){
        $data_kp = kp::all();//menampilkan semua atribut yang sudah di seleksi di model
        return view('kp.kp',compact('data_kp'));
        //(folder.file)//(menampilkan atribut di view foreach nya)
    }
    public function tambah(Request $request){
        \App\kp ::create($request->all());
        return redirect('kp')->with('sukses','Silakan melakukan pengecekan status pengajuan Anda secara mandiri !');
    }
    */
   // public function index()
    //{
    //    $data = [
    //        'kp' => $this->kpModel->allData(),
    //    ];
    //    return view('kp.kp', $data);
   // }
    //public function detail untuk update

    public function index()
    {
       $data_kp = kpModel::all();
        return view('kp.kp',compact('data_kp'));
    }
    public function input()
    {
        return view('kp.tambahkp');
    }

    public function simpan(Request $request)
    {
        kpModel::create([
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'nim' => $request->nim,
            'judul' => $request->judul,
            'tools' => $request->tools,
            'spek' => $request->spek,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'fax' => $request->fax,
            'dokumen' => $request->dokumen,
            'status_kp' =>0,
            'dosen_id' =>0
        ]);
        return redirect('/kp')->with('toast_success', 'Data Berhasil Disimpan');
    }

    public function edit($id_kp){
        $data_kp = kpModel::findorfail($id_kp);
        return view('kp.editkp',compact('data_kp'));
    }

    public function update(Request $request, $id_kp)
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->update($request->all());
        return redirect('/kp')->with('toast_success', 'Data Berhasil Diubah');
    }

    public function delete($id_kp)
    {
        $data_kp = kpModel::findorfail($id_kp);
        $data_kp->delete();
        return redirect('/kp')->with('toast_success', 'Data Berhasil Dihapus');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }


    
}
