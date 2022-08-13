<?php

namespace App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Welcome extends Component
{
    public $buscarp;
    public $agrcotizar = false;
    public $coty = array();
    public $abrircotiz;
    public $cont = 0;
    public $suma = 0;
    public $nombparacotizar;
    public $ident;
    public $nombproducto;
    public $precioproducto;


    public function render()
    {
        
        $info = HTTP::get('https://farmecc.herokuapp.com/api/public/infoPage');
        $infoArray = $info->json();

        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();

       
        return view('livewire.welcome.welcome', compact('infoArray','infosucursArray'));
    }

    public function agregar($nomb, $id, $precio)
    {
        $this->agrcotizar = true;
        $this->nombproducto =  $this->nombproducto."<br>" .$nomb."<hr>";
        $this->precioproducto =  $this->precioproducto."<br>" .$precio."<hr>";

        $this->suma = $this->suma + $precio;
        $this->nombparacotizar =  $nomb;
        $this->ident= $id;

        $this->cont = $this->cont + 1;

    }


    public function vaciar(){
        $this->suma =  0;
        $this->nombproducto = " ";
        $this->precioproducto =  " ";
    }

    public function cerrarsesion(){
        session_destroy();
    }

}
