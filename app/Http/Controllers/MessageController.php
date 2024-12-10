<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {        
        return view('admin.message');
    }

    public function teste()
    {        
        return view('admin.teste');
    }
}
