<?php

namespace App\Http\Controllers;

use App\Models\Mercador_view;
use Illuminate\Http\Request;

class MercadorViewController extends Controller
{
    public function tables()
    {
        $mercador_views = Mercador_view::all();
        //dd($products->toArray());       
        return view('admin.tables', [
            'mercador_views' => $mercador_views
        ]);
    }
}
