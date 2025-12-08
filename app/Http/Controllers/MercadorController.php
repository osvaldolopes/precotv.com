<?php

namespace App\Http\Controllers;

use App\Models\Mercador_parcial;
use App\Models\Product;
use Illuminate\Http\Request;

class MercadorController extends Controller
{
    public function dashboard()
    {
        $mercadors = Mercador_parcial::all();
        $contador  = Product::count(); // retorna só o número
    
        return view('admin.dashboard', [
            'mercadors' => $mercadors,
            'contador'  => $contador
        ]);
    }    
}

