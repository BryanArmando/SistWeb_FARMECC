<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InformationController extends Controller
{
    public $cerrarsesion;
    
    public function index()
    {
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
        }
        else{
            $usuarioingresado = "";
        }


        $info = HTTP::get('https://farmecc.herokuapp.com/api/public/infoPage');
        $infoArray = $info->json();

        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();

        return view('inicio.iniciopage', compact('infoArray','infosucursArray','usuarioingresado'));
    }
}
