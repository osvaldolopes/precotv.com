<?php

namespace App\Http\Controllers;

use App\Models\Mercador_view;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {     
        $mercador_views = Mercador_view::where('prod_checked', '=', 'checked')->simplePaginate(14);
        return view('home', [
            'mercador_views' => $mercador_views
        ]);
    }
}
