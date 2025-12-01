<?php

namespace App\Http\Controllers;

use App\Models\Mercador_view;

class HomeController extends Controller
{
    public function home()
    {     
        if (!request()->has('page')) {
            return redirect()->route('home', ['page' => 1]);
        }    
        $mercador_views = Mercador_view::where('prod_checked', 'checked')
            ->simplePaginate(14);
    
        return view('home', compact('mercador_views'));
    
    }
}
