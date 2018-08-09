<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{

    public function dashboard(){
        

        return view('dashboard');
    }

    public function global(){

        $semana = array(0,0,0,0);
        $meses = array(0,0,0,0,0,0,0,0,0,0,0,0,0);


        $cursor = \App\Interaccion::pluck('tiempo_interaccion');

        ///return $cursor;
        $cursorBallena = \App\Interaccion::where('expo','ballena')->pluck('tiempo_interaccion');
        $xdiaBallena = 0;
        $xsemanaBallena = 0;
        $promedioMesBallena = 0;

        $cursorTiburon = \App\Interaccion::where('expo','tiburon')->pluck('tiempo_interaccion');
        $xdiaTiburon = 0;
        $xsemanaTiburon = 0;
        $promedioMesTiburon = 0;

        $cursorTigre = \App\Interaccion::where('expo','tigre')->pluck('tiempo_interaccion');
        $xdiaTigre = 0;
        $xsemanaTigre = 0;
        $promedioMesTigre = 0;

        //$cursor = \App\Interaccion::all();
        //return $cursor;

        foreach($cursor as $c){
            $cadena = explode("/",$c);
            $i = intval($cadena[0]-1);
            $meses[$i]++;
        }

        foreach($cursorBallena as $ct){
            $cadena = explode("/",$ct);
            $promedioMesBallena++;
            if(intval($cadena[0]) == Date('n')){
            $xdiaBallena ++;
            }
        }
        
        $promedioMesBallena = $promedioMesBallena / 12;
        $xsemanaBallena = $xdiaBallena / 4;
        $xdiaBallena = $xdiaBallena / 30;
        

        
        foreach($cursorTiburon as $ct){
            $cadena = explode("/",$ct);
            $promedioMesTiburon++;
            if(intval($cadena[0]) == Date('n')){
            $xdiaTiburon ++;
            }
        }
        $promedioMesTiburon = $promedioMesTiburon / 12;
        $xsemanaTiburon = $xdiaTiburon / 4;
        $xdiaTiburon = $xdiaTiburon / 30;



        foreach($cursorTigre as $ct){
            $cadena = explode("/",$ct);
            $promedioMesTigre++;
            if(intval($cadena[0]) == Date('n')){
            $xdiaTigre ++;
            }
        }
        $promedioMesTigre = $promedioMesTigre / 12;
        $xsemanaTigre = $xdiaTigre / 4;
        $xdiaTigre = $xdiaTigre / 30;

        return view('reportes.global',compact(['meses','xdiaBallena','xdiaTiburon','xdiaTigre','xsemanaBallena',
        'xsemanaTiburon','xsemanaTigre','promedioMesBallena','promedioMesTigre','promedioMesTiburon']));

        
    }

    public function interaccion($id){

        $meses = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
        $sonidoxDia = 0;
        $sonidoxSemana = 0;
        $sonidoxMes = 0;
        $narracionxDia = 0;
        $narracionxSemana = 0;
        $narracionxMes = 0;
        $total = 0;
        $totalSonido = 0;
        $totalNarracion = 0;
        $exhibcion = "";
        

        $sonido = 0;
        $narracion = 0;

        switch($id){
            case 1:
                $sonido = \App\Interaccion::where('reaccion','btnText_SoundWhale')->pluck('tiempo_interaccion');
                $narracion = \App\Interaccion::where('reaccion','btnText_NarWhale')->pluck('tiempo_interaccion');
                $exhibicion = "\"BALLENA\"";
                break;

            case 2:
                $sonido= \App\Interaccion::where('reaccion','btnText_SoundTiger')->pluck('tiempo_interaccion');
                $narracion = \App\Interaccion::where('reaccion','btnText_NarTiger')->pluck('tiempo_interaccion');
                $exhibicion = "\"TIGRE\"";
                break;

            case 3:
                $sonido = \App\Interaccion::where('reaccion','btnText_SoundShark')->pluck('tiempo_interaccion');
                $narracion = \App\Interaccion::where('reaccion','btnText_NarTiburon')->pluck('tiempo_interaccion');
                $exhibicion = "\"TIBURON\"";
            break;
        }

        foreach($sonido as $s){
            $cadena = explode("/",$s);
            $i = intval($cadena[0]-1);
            $total++;
            $totalSonido++;
            $meses[$i]++;
        }

        foreach($narracion as $n){
            $cadena = explode("/",$n);
            $i = intval($cadena[0]-1);
            $total++;
            $totalNarracion++;
            $meses[$i]++;
        }

        $sonidoxDia = $totalSonido / 30;
        $sonidoxMes = $totalSonido / 12;
        $sonidoxSemana = $totalSonido / 4;

        $narracionxDia = $totalNarracion / 30;
        $narracionxMes = $totalNarracion / 12;
        $narracionxSemana = $totalNarracion / 4;



        return view('reportes.interacciones',compact(['meses', 'sonidoxDia','sonidoxMes','sonidoxSemana','narracionxDia','narracionxMes','narracionxSemana','exhibicion']));
    }

    public function encuesta(){
        return view('reportes.encuesta');
    }

    public function tiempo(){
        return view('reportes.tiempo');
    }
}


