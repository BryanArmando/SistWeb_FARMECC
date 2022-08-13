<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Cart;



class ProductController extends Controller
{
    public $cerrarsesion;

    public function index(){
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            $token = $_SESSION['token'];
        }
        else{
            $usuarioingresado = "";
        }
        if (isset($_SESSION['token'])){
            $token = $_SESSION['token'];
        }
        else{
            $token = "";
        }


        return view('catalogo.listcatalogo', compact('usuarioingresado','token'));
    }
    
    public function cotizacion(){
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            $token = $_SESSION['token'];
        }
        else{
            $usuarioingresado = "";
        }
        return view('cotizacion.cotizar', compact('usuarioingresado','token'));
    }



    public function index4(){
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            if (isset($_SESSION['token'])){
                $token = $_SESSION['token'];
            }
            else{
                $token = "";
            }
            return view('modulos.productos',compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }
    }

    public function index5(){

        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            if (isset($_SESSION['token'])){
                $token = $_SESSION['token'];
            }
            else{
                $token = "";
            }
            return view('modulos.stock', compact('usuarioingresado','token'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }
    }
}
