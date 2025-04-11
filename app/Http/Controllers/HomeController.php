<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {     
        $products = Product::paginate(80);
        return view('home', [
            'products' => $products
        ]);
    }
}
