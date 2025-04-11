<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function dashboard()
    {
        $products = Product::all(); 
        return view('admin.dashboard', [
            'products' => $products
        ]);
    }
    public function tables()
    {
        $products = Product::all(); 
        //dd($products->toArray());       
        return view('admin.tables', [
            'products' => $products
    ]);
    }
}
