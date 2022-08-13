<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageIni extends Controller
{
    public $cerrarsesion;
    public function index()
    {
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
            return view('modulos.homepageinicial', compact('usuarioingresado'));
        }
        else{
            $usuarioingresado = "";
            return redirect()->route('login');
        }
       
    }

}
