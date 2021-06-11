<?php

namespace App\Http\Controllers;
use App\Models\kpModel;
use App\Models\skpModel;
use App\Models\pkpModel;
use Illuminate\Http\Request;

class ujianController extends Controller
{
    public function index()
    {
        $data_kp = kpModel::where('status_ujian','=','1')->get();
        return view('ujian.ujian', compact('data_kp'));
    }
    public function index_pkp()
    {
        $data_pkp = pkpModel::where('status_ujian','=','1')->get();
        return view('ujian.ujian_pkp', compact('data_pkp'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
