<?php

namespace App\Http\Controllers;

use App\Models\Mercador_parcial;
use Illuminate\Http\Request;

class MercadorController extends Controller
{
    public function dashboard()
    {
        $mercadors = Mercador_parcial::all();
        return view('admin.dashboard', [
            'mercadors' => $mercadors
        ]);
    }
}
