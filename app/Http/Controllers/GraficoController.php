<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function datos(){
        $datos1 = [12,23,5,9,7,10,4,9,14,10,3,6];
        $datos2 = [10,5,21,8,7,11,6,5,12,9,3,2];
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        

        return view('graficos')
    ->with('datos1', $datos1)
    ->with('datos2', $datos2)
    ->with('meses', $meses);

    }
}
