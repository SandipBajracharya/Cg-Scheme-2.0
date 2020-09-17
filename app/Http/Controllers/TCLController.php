<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TCLController extends Controller
{
    public function index()
    {
        return view('TCL.tcl_landing');
    }

    public function aboutTcl()
    {
        return view('TCL.tcl_aboutus');
    }

    public function catalog_download()
    {
        $file = public_path()."/storage/pdf/catalogue.pdf";
        $header = [
            'Content-Type' => 'application/pdf',
        ];
        return response()->download($file,'catalogue.pdf',$header);
    }

}
