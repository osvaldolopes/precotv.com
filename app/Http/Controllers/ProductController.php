<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function tables()
    {
        return view('admin.tables');
    }
}
