<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Carbon\Carbon;
use Symfony\Component\Mime\Header\Headers;

class Reporte extends Component
{

    public $fechaini;
    public $fechafin;
    public $fechainisucur;
    public $fechafinsucur;
    public $reportsucursal;
    public $tokenok;
    public $pdfxfechasw;
    public $pdfxsucursalw;
    public $pdftotalw;

    public function render()
    {
        //Obtengo info de sucursales
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();

        return view('livewire.reporte', compact('infosucursArray'));
    }
    public function limpiarC(){
      $this->fechaini='';
      $this->fechafin='';
    }
    public function limpiarC2(){
      $this->reportsucursal ='';

    }
    public function fecha(){
      return redirect('https://farmecc.herokuapp.com/api/public/fechasPDF?fecha1='.$this->fechaini.'&fecha2='.$this->fechafin);
    }

    public function fechasucur(){
      return redirect('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->reportsucursal.'/reporteventas');
    }

    public function fechatotal(){
      return redirect('https://farmecc.herokuapp.com/api/public/exportarPDF');
    }
}
