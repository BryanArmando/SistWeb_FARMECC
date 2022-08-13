<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Maintop extends Component
{
    public $username;
    public $password;


    public function render()
    {
        
        $logoutc= config('varglobales.varlogout');

        // Traer usuarios administradores
        $useradmin = Http::get('https://farmecc.herokuapp.com/api/private/users'); 
        $useradminArray = $useradmin->json();

        return view('livewire.maintop', compact('logoutc', 'useradminArray'));
    }
}
