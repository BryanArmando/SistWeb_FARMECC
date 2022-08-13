<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use GuzzleHttp\Client;  //Cliente para consumir API
use Illuminate\Support\Facades\Http;

class DoctorController extends Controller
{

    public $cerrarsesion;

    public function medicos(){
        session_start();
        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
        }
        else{
            $usuarioingresado = "";
        }

        $doctors = HTTP::get('https://farmecc.herokuapp.com/api/public/medicos');
        $doctorsArray = $doctors->json();
        return view('contacto.contactos', compact('doctorsArray','usuarioingresado'));
    }

}
