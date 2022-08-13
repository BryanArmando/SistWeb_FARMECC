<?php

namespace App\Http\Livewire\Principal;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Doctores extends Component
{
   
    public function render()
    {
       
        $doctors = HTTP::get('https://farmecc.herokuapp.com/api/public/medicos');
        $doctorsArray = $doctors->json();
        return view('livewire.principal.doctores', compact('doctorsArray'));
    }
}
