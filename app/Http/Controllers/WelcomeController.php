<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
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


        return view('welcome', compact('usuarioingresado'));
    }
}
