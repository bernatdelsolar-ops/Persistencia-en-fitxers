<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NouController extends Controller
{
    //
    public function saluda(){

        return ('<h1>Hola Company</h1>');


    }


public function parametresRequest($num1, $num2){

        return view ('vistaPrueba', ['titol'=> 'Tenim el num1: ' .$num1. ' i el num2 : ' .$num2]);
    
    }

     public function carregavista(){

        return view ('vista', ['titol'=> 'Titol de la pagina']);


    }

    public function demoif($valor){

        return view ('code',["valor"=> $valor, "arr" => $arr]);
    }

    public function demoFor(){

        $dies = ["dilluns", "dimarts" , "dimecres", "dijous", "divendres", "dissabte", "diumenge"];
        return view ('bucles',["dies"=> $dies,]);
    }
}
