<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProregProduct;

class ProregController extends Controller
{
    public function proregproduct()
    {
        $proreg_products = ProregProduct::all(); 
        return view('admin.integration', [
            'proreg_products' => $proreg_products
        ]);
    }
}
