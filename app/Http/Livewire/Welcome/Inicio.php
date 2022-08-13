<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Inicio extends Component
{
   

    public function render()
    {
        
        $info = HTTP::get('https://farmecc.herokuapp.com/api/public/infoPage');
        $infoArray = $info->json();

        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();
        return view('livewire.welcome.inicio', compact('infoArray','infosucursArray'));
    }
}
