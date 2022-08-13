<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Menudesplegable extends Component
{
    public $ottPlataform = '';


    public $opcmenu = [
        'Gestión de sucursales',
        'Visualizar Productos',
        'Reportes de sucursales',
        'Stock de productos',
        'Visualizar ventas',
        'Pedidos a proveedores',
        'Personal',
    ];

    public function render()
    {
        
        return view('livewire.menudesplegable');
    }
}
