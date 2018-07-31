<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {

        $this->validate(request(),[
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);

        $usuario = 'admin';
        $pass = 'admin';

        if(request('usuario') != $usuario || request('password') != $pass){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);

        
        }
        else return view('dashboard');
    }
}
