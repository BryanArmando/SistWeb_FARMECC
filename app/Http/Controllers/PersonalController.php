<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PersonalController extends Controller
{
    public $cerrarsesion;

    public function index(){
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            if (isset($_SESSION['token'])){
                $token = $_SESSION['token'];
            }
            else{
                $token = "";
            }
            return view('modulos.personal', compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }
   
    }
}
