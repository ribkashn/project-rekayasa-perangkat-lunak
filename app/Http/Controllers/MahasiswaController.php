<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('layouts.mhs');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
