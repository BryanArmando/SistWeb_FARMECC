<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Visualproductos extends Component{

    public $searchTerm;
    public $searchSucursal;
    public $modalver = false;
    public $modalver1 = false;
    public $modalver2 = false;


    public function render()
    {


        $products = HTTP::get('https://farmecc.herokuapp.com/api/public/productos');
        $productsArray = $products->json();
        
        $productsbusc = HTTP::get('https://farmecc.herokuapp.com/api/public/productosfilter/'.$this->searchTerm);
        $productsbuscArray = $productsbusc->json();
        //Obtengo info de sucursales
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();
        //Buscar productos por sucursales:
        $buscprodxsucur = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->searchSucursal.'/productos');
        $buscprodxsucurArray = $buscprodxsucur->json();


        //Nombre de sucursal
        $sucurbusc1 = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->searchSucursal); 
        $sucurbus1Array = $sucurbusc1->json();
        return view('livewire.visualproductos', compact('productsArray', 'productsbuscArray','infosucursArray','buscprodxsucurArray','sucurbus1Array'));
    }

    public function abrirModal() {
        
        $this->modalver = true;
    }
    public function cerrarModal() {
        $this->modalver = false;
    }
    public function abrirModal1() {
        
        $this->modalver1 = true;
    }
    public function cerrarModal1() {
        $this->modalver1 = false;
    }
    public function abrirModal2() {
        
        $this->modalver2 = true;
    }
    public function cerrarModal2() {
        $this->modalver2 = false;
    }

    public function ver(){
        $this->abrirModal();
    }
    public function ver1(){
        $this->abrirModal1();
    }
    public function ver2(){
        $this->abrirModal2();
    }
}