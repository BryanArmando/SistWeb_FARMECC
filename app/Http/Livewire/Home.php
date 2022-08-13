<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $nombreuser;
    public $ruta = false;
    public function render()
    {
        
        return view('livewire.home');
    }
    public function cerrarsesion(){
        return redirect()->route('welcome');

    }


}
