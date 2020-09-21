<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class TCLController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('prevent-back-history');
    // }

    public function index()
    {
        $posts = Products::all();
        return view('TCL.tcl_landing')->with('posts', $posts);
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
