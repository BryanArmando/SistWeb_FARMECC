<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function render()
    {
        return view('layouts.app');
    }
    public function logout(){
        session_destroy();
    }
}
