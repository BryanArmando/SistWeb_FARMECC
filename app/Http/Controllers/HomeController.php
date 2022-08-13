<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public $cerrarsesion;
    public $cerrar = false;
    public function index()
    {
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
        }
        else{
            $usuarioingresado = "";
        }

        return view('home', compact('usuarioingresado'));
    }

    
}
