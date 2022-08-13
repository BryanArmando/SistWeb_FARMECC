<?php

namespace App\Http\Livewire\Principal;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Laravel\Ui\Presets\React;
use Livewire\Component;
//Paginación de Livewire
use Livewire\WithPagination;

class Catalogo extends Component
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

    use WithPagination;

    public function render(Request $request)
    {
        
        $products = Http::get('https://farmecc.herokuapp.com/api/public/productos');
        $productsArray = $products->json();
/*
        $currentPage = $request->page;
        $perPage = 4;

        $currentElements = array_slice($productsArray, $perPage * ($currentPage - 1), $perPage);
 
        $res = new Paginator($currentElements, $perPage, $currentPage);
*/
        $productsbusc = HTTP::get('https://farmecc.herokuapp.com/api/public/productosfilter/'.$this->buscarp);
        $productsbuscArray1 = $productsbusc->json();

        $agregarprodbusc=HTTP::get('https://farmecc.herokuapp.com/api/public/productosfilter/'.$this->agrcotizar);
        $agregarprodbuscArray = $agregarprodbusc->json();

        $nombprodcotizar=HTTP::get('https://farmecc.herokuapp.com/api/public/productosfilter/'.$this->nombparacotizar);
        $nombprodcotizarArray = $nombprodcotizar->json();

        return view('livewire.principal.catalogo',compact('productsArray','productsbuscArray1','agregarprodbuscArray', 'nombprodcotizarArray'));
    }
    public function agregar($nomb, $id, $precio)
    {
        $this->agrcotizar = true;

        /*
        $this->coty = ['nombre' => $nomb];
        $this->coty =Arr::add($this->coty, 'precio',$precio);
        */
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

}
