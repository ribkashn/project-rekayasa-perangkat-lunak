<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ujianController extends Controller
{
    public function index()
    {
        return view('ujian.ujian');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
