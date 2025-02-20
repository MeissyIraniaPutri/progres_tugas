<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('layout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master-data.product-master.create-product");
       
    }

   
    public function store(Request $request)
    {
        // validasi input data
$validasi_data = $request->validate([
    'product_name' => 'required|string|max:255',
    'unit'         => 'required|string|max:50',
    'type'         => 'required|string|max:50',
    'information'  => 'nullable|string',
    'qty'          => 'required|integer',
    'producer'     => 'required|string|max:255',
]);

// Proses simpan data kedalam database
Product::create($validasi_data);

return redirect()->back()->with('success', 'Product created successfully!');


    }

        public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
