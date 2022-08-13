<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $cerrarsesion;
     
    public function index(Request $request)
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

            return view('modulos.gestsucursales', compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }   
    }  
}
