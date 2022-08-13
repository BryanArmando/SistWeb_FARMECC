<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Visualventas extends Component
{
    public $selectedsucursales;
    public $tokenok;

    public function render()
    {

        if (isset($_SESSION['nombreusuario'])){
            $usuarioingresado = $_SESSION['nombreusuario'];
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
        
        //Obtengo info de sucursales
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();

        //Búsqueda de ventas por sucursal
        $ventassucur = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/sucursal/'.$this->selectedsucursales.'/ventas');
        $ventassucurArray = $ventassucur->json();
        //Para listar ventas:
        $ventas = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/ventas');
        $ventasArray = $ventas->json();
        //Busqueda por sucursal
        $sucurbuscar = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->selectedsucursales); 
        $sucurbuscarArray = $sucurbuscar->json();

        

        return view('livewire.visualventas', compact('ventasArray','infosucursArray','ventassucurArray', 'sucurbuscarArray'));
    }
}
