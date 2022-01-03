<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    public function index(Request $peticion){
        //capturamos desde el navegador la peticion 
        $arreglo = ['nombre'=>$peticion->query('nombre','NN')];
        
        return view('welcome2')->with($arreglo);
    }
}
