<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {        
        return view('admin.login');
    }

    public function password()
    {        
        return view('admin.password');
    }

    public function register()
    {        
        return view('admin.register');
    }
}
