<?php

namespace App\Http\Controllers;

use App\Models\Mercador_view;

class HomeController extends Controller
{
    public function home($dp_id)
    {     
        if (!request()->has('page')) {
            return redirect()->route('home', ['page' => 1]);
        }    
        $mercador_views = Mercador_view::where('departament_id', $dp_id)
            ->simplePaginate(14);
    
        return view('home', ['dp_id' => $dp_id], compact('mercador_views'));
    
    }
}
