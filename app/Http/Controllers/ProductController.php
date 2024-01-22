<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index(){
        
    }
    public function showproduct(){
        $products = Product::all();
        return $products;
    }
}
