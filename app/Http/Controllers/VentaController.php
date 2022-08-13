<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;  //Cliente para consumir API
use Illuminate\Support\Facades\Http;
use Collective\Html\FormFacade;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function _contruct(){
         $this->middleware('auth:api');
     }
    
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
        return view('modulos.ventas', compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }   
        
    }
}
