<?php

namespace App\Http\Controllers;

use App\Models\Mercador;
use Illuminate\Http\Request;

class MercadorController extends Controller
{
    public function dashboard()
    {
        $mercadors = Mercador::all();
        return view('admin.dashboard', [
            'mercadors' => $mercadors
        ]);
    }
}
