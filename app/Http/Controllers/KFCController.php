<?php

namespace App\Http\Controllers;

use App\Cadena;
use App\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KFCController extends Controller
{
   public function ruta2(){
       $cadenas=DB::select("Select * from Cadena where Cod_Cadena=:cod_cadena",["cod_cadena"=>10]);
       return $cadenas;
   }

   public function ruta3(){
       $restaurantes=Restaurante::with("cadena")
           ->where("cod_restaurante",100)
       ->get();
       return $restaurantes;
   }
   public function ruta4(){
       $cadena=Cadena::with("restaurantes")
           ->where("cod_cadena",10)
       ->get();
       return $cadena;
   }
}
