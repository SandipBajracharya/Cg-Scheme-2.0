<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required | string | max:255',
            'model' => 'required | string | max:255',
            'size' => 'required | string | max:255',
            'mrp' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'offer_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'save_customer' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'image|max:1999|nullable',
        ]);

        if($request->hasFile('image')){
            $FileNameWithExtension = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($FileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $FileToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request -> file('image') -> storeAs('public/images', $FileToStore);
        }
        else{
            $FileToStore = 'noimage.jpg';
        }

        $product = new Products;
        $product->type = $request->input('type');
        $product->model_no = $request->input('model');
        $product->size = $request->input('size');
        $product->MRP = $request->input('mrp');
        $product->offer_price = $request->input('offer_price');
        $product->saved_customer = $request->input('save_customer');
        $product->category = $request->input('category');
        $product->image = $FileToStore;
        $product->save();

        return redirect('/products/create')->with('success','Product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id)->first();
        if($product->image != "noimage.jpg"){
            Storage::delete('public/images/'.$product->image);
        }
        $product->delete();

        return redirect('/home')->with('success','Item removed.');
    }
}
