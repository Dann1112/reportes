<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RegistrationController extends Controller
{
    public function index(){
        return view('registro');
    }

    public function store(){
        return view('registro');
    }

    public function prueba(){
        return \App\User::all();
    }

}

