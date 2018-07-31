<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{

    public function dashboard(){

        return view('dashboard');
    }

    public function global(){

        return view('reportes.global');
    }

    public function interaccion($id){
        return view('reportes.interacciones');
    }

    public function encuesta(){
        return view('reportes.encuesta');
    }

    public function tiempo(){
        return view('reportes.tiempo');
    }
}


