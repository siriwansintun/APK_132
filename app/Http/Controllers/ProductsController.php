<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return['page'=> 'index', 'payload'=> $product];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'product_name' => $request->pd_name,
            'product_type' => $request->pd_type,
            'price' => $request->pd_price,
        ]);
        return ["message"=>"Successful."];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // select * FROM Products where id = 1
        // $result = Product::find($id);
        $result = Product::where("product_type", $id)->get();
        return $result;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // UPDATE product
        // SET product_name = "epink", price=100
        // WHERE id = 5

        $product = Product::find($id);
 
        $product->product_name = $request->pd_name;
        $product->price = $request->pd_price;
 
        $product->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $result = ['name' => 'destroy', 'paylod'=> $id];
    }
}
