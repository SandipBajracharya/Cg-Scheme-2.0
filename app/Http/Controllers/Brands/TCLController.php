<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TCLController extends Controller
{
    public function index()
    {
        return view('TCL.tcl_landing');
    }
}
