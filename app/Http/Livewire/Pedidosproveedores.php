<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Pedidosproveedores extends Component
{
    public $modal = false;
    public $modal2 = false;
    public $modal3 = false;
    public $modal4 = false;
    public $modal5 = false;
    public $modal6 = false;
    public $tokenok;

    public $proveedorid;



    public function render()
    {
        
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();

        $products = HTTP::get('https://farmecc.herokuapp.com/api/public/productos');
        $productsArray = $products->json();

        $proveedores = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/proveedor');
        $proveedoresArray = $proveedores->json();

        $pedidos = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/pedidos');
        $pedidosArray = $pedidos->json();
        
        $buscarproveedores = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/proveedor/'.$this->proveedorid);
        $buscarproveedoresArray = $buscarproveedores->json();



        return view('livewire.pedidosproveedores', compact('infosucursArray','productsArray','proveedoresArray', 'pedidosArray','buscarproveedoresArray'));
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function crearprov()
    {
        $this->limpiarCamposprov();
        $this->abrirModal4();
    }
    public function abrirModal() {
        $this->modal = true;
    }
    public function abrirModal2() {

        $this->modal2 = true;
    }
    public function abrirModal3() {
        $this->modal3 = true;
    }
    public function abrirModal4() {
        $this->modal4 = true;
    }
    public function abrirModal5() {
        $this->modal5 = true;
    }
    public function abrirModal6() {
        $this->modal6 = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function cerrarModal2() {
        $this->modal2 = false;
    }
    public function cerrarModal3() {
        $this->modal3 = false;
    }
    public function cerrarModal4() {
        $this->modal4 = false;
    }
    public function cerrarModal5() {
        $this->modal5 = false;
    }
    public function cerrarModal6() {
        $this->modal6 = false;
    }


    public function limpiarCampos(){
        $this->id_pedi= '';
        $this->cant= '';
        $this->proveed = '';
        $this->product = '';
    }
    public function limpiarCamposprov(){
        $this->id_prov= '';
        $this->nbprov= '';
        $this->telfprov= '';
        $this->dirprov = '';
        $this->rucprov = '';
    }


    public function editar($id, $cant, $prov, $prod)
    {
        $this->id_pedi= $id;
        $this->cant= $cant;
        $this->proveed = $prov;
        $this->product = $prod;
        $this->abrirModal2();
    }
    public function editarprov($id, $tk)
    {
        $proveedindiv = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->GET('https://farmecc.herokuapp.com/api/private/proveedor/'.$id);

        $this->id_prov= $id;
        $this->nbprov= $proveedindiv['nombreProveedor'];
        $this->telfprov= $proveedindiv['numContactoProveedor'];
        $this->dirprov = $proveedindiv['direccion'];
        $this->rucprov = $proveedindiv['ruc'];

        $this->abrirModal5();
    }
    public function confirmar($id1){
        $this->abrirModal3();
        $this->id_confirmacion = $id1;
    }
    public function confirmarprov($id7){
        $this->abrirModal6();
        $this->id_confirmacionp = $id7;
    }

    public function borrar($tk)
    {       
        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->DELETE('https://farmecc.herokuapp.com/api/private/pedidos/'.$this->id_confirmacion);

        session()->flash('message', 'Registro eliminado correctamente');
        $this->proveedorid = "";
        $this->cerrarModal3();

    }
    public function borrarprov($tk)
    {       
        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->DELETE('https://farmecc.herokuapp.com/api/private/proveedor/'.$this->id_confirmacionp);

        session()->flash('message', 'Registro eliminado correctamente');
        $this->proveedorid = "";
        $this->cerrarModal6();

    }

    public function guardar($tk)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'proveed' => 'required',
            'product' => 'required',
            'cant' => 'required|integer|without_spaces',

        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
        ]);



        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->POST('https://farmecc.herokuapp.com/api/private/pedidos', [
            'nombreProveedor'=>$this->proveed, 
            'productoPedido'=>$this->product,
            'cantidad'=>$this->cant
        ]);

        session()->flash('message',
        $this->id_pedi ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function guardarprov($tk)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'nbprov' => 'required|without_spaces',
            'telfprov' => 'required|integer|min:1000000|max:9999999|without_spaces',
            'dirprov' => 'required|without_spaces',
            'rucprov' => 'required|without_spaces|integer|min:1000000000000|max:9999999999999|',
        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
            'min' => 'Se requiere un mínimo de 13 dígitos',
            'max' => 'Se requiere un máximo de 13 dígitos',
        ]);



        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->POST('https://farmecc.herokuapp.com/api/private/proveedor', [
            'nombreProveedor'=>$this->nbprov, 
            'numContactoProveedor'=>$this->telfprov,
            'direccion'=>$this->dirprov,
            'ruc'=>$this->rucprov
        ]);

        session()->flash('message',
        $this->id_prov ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal4();
        $this->limpiarCamposprov();
    }

    public function guardar_edicion($tk)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'proveed' => 'required',
            'product' => 'required',
            'cant' => 'required|integer|without_spaces',

        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
        ]);


        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->PUT('https://farmecc.herokuapp.com/api/private/pedidos/'.$this->id_pedi, [
            'nombreProveedor'=>$this->proveed, 
            'productoPedido'=>$this->product,
            'cantidad'=>$this->cant
        ]);
         
        session()->flash('message',
        $this->id_pedi ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal2();
        $this->limpiarCampos();
    }

    public function guardar_edicionprov($tk)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'nbprov' => 'required|without_spaces',
            'telfprov' => 'required|integer|min:1000000|max:9999999|without_spaces',
            'dirprov' => 'required|without_spaces',
            'rucprov' => 'required|without_spaces|integer|min:1000000000000|max:9999999999999|',
        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
            'min' => 'Se requiere un mínimo de dígitos',
            'max' => 'Se requiere un máximo de dígitos',
        ]);



        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->PUT('https://farmecc.herokuapp.com/api/private/proveedor/'.$this->id_prov, [
            'nombreProveedor'=>$this->nbprov, 
            'numContactoProveedor'=>$this->telfprov,
            'direccion'=>$this->dirprov,
            'ruc'=>$this->rucprov
        ]);
         
        session()->flash('message',
        $this->id_prov ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal5();
        $this->limpiarCamposprov();
    }
}
