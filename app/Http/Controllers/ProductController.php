<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('productList', compact('products'));
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->save();
        echo "Successfully Submitted";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productDetails = Product::where('id', $id)->first();
        // $productDetails = Product::find($id);
        return view('productView', compact('productDetails'));
        // $productDetails = Product::where('id', $id)->first();
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
