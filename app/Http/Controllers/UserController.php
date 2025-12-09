<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

use App\Models\User;
use PHPUnit\Metadata\Uses;

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

    public function register(Request $request)
    {   
        return view('admin.register');
    }

    public function registered(UserRequest $request)
    {   
        // INPUT DO FORM E VALIDAÇÃO DOS CAMPOS
        $input = $request->validated(); 
        
        // PERSISTINDO NO BANCO
        if (!User::where('email', $request->email)->first()){
            $registered = User::create($input);
            return redirect('register');
        }else{
            return redirect('message');
        }         
    }
}
