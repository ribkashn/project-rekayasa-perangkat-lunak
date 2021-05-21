<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
