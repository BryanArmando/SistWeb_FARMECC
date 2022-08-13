<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public $cerrarsesion;

    public function index()
    {
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            if (isset($_SESSION['token'])){
                $token = $_SESSION['token'];
            }
            else{
                $token = "";
            }
            return view('modulos.pedidos',compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }
        
        
    }
}
