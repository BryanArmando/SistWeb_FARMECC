<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Stockproductos extends Component
{


    public function render()
    {
        
        $productsstock = HTTP::get('https://farmecc.herokuapp.com/api/public/productos/');
        $productsstockArray = $productsstock->json();
        return view('livewire.stockproductos', compact('productsstockArray'));
    }
}
