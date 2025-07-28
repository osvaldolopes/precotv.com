<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {     
        $products = Product::where('prod_checked', '=', 'checked')->simplePaginate(12);
        return view('home', [
            'products' => $products
        ]);
    }
}
