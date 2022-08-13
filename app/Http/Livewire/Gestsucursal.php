<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Gestsucursal extends Component
{
    use WithPagination;

    public $searchSucur;
    public $modal = false;
    public $modal2 = false;
    public $modal3 = false;
    public $modal4 = false;
    public $agrega;
    public $tokenok;


    public function render()
    {
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();
        
        $sucurbusc = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->searchSucur); 
        $sucurbuscArray = $sucurbusc->json();
        return view('livewire.gestsucursal', compact('infosucursArray','sucurbuscArray'));
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
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
    public function limpiarCampos(){
        $this->id_suc= '';
        $this->nombre = '';
        $this->ciudad = '';
        $this->telefono = '';
        $this->direccion= '';
    } 
    public function editar($id)
    {
        $sucurindiv = HTTP::GET('https://farmecc.herokuapp.com/api/public/sucursal/'.$id);
        $this->id_suc= $id;
        $this->nombre = $sucurindiv['nombre'];
        $this->ciudad = $sucurindiv['ciudad'];
        $this->telefono = $sucurindiv['telefono'];
        $this->direccion= $sucurindiv['direccion'];
        $this->abrirModal2();
    }

    public function confirmar($id1){
        $this->abrirModal3();
        $this->id_confirmacion = $id1;
    }

    public function borrar($tk)
    {    

        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->DELETE('https://farmecc.herokuapp.com/api/private/sucursal/'.$this->id_confirmacion);

        session()->flash('message', 'Registro eliminado correctamente');
        $this->searchSucur = "";
        $this->cerrarModal3();

    }
    public function confirmar1($id11){
        $this->abrirModal4();
        $this->id_confirmacion = $id11;
    }

    public function borrar1($tk)
    {    
        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->DELETE('https://farmecc.herokuapp.com/api/private/sucursal/'.$this->id_confirmacion);

        session()->flash('message', 'Registro eliminado correctamente');
        $this->searchSucur = "";
        $this->cerrarModal4();


    }
    public function guardar($tk)
    {



        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'nombre' => 'required|max:100|without_spaces',
            'ciudad' => 'required|max:50|without_spaces',
            'telefono' => 'required|integer|min:1000000|max:9999999|without_spaces',
            'direccion' => 'required|max:150|without_spaces',
        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
            'min' => 'Se requiere un mínimo de 7 dígitos',
            'max' => 'Se requiere un máximo de 7 dígitos',
        ]);

        //eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJBZG1pbmlzdHJhZG9yIiwicm9sZXMiOlsiUk9MRV9BRE1JTiJdLCJpc3MiOiJodHRwczovL2Zhcm1lY2MuaGVyb2t1YXBwLmNvbS9hcGkvcHVibGl

        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->POST('https://farmecc.herokuapp.com/api/private/sucursal', [
            'nombre'=>$this->nombre,
            'ciudad'=>$this->ciudad,
            'telefono'=>$this->telefono,
            'direccion'=>$this->direccion,
        ]);
        
         
        session()->flash('message',
        $this->id_suc ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal();
        $this->limpiarCampos();
    }


    public function guardar_edicion($tk)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S/', $value);
        });

        $rules = $this->validate([
            'nombre' => 'required|max:100|without_spaces',
            'ciudad' => 'required|max:50|without_spaces',
            'telefono' => 'required|integer|min:1000000|max:9999999|without_spaces',
            'direccion' => 'required|max:150|without_spaces',
        ],
        [
            'without_spaces' => 'Los espacios en blanco al inicio no son permitidos',
            'required' => 'Se requiere que llene este campo',
            'integer' => 'Sólo se admiten datos de tipo numérico',
            'min' => 'Se requiere un mínimo de 7 dígitos',
            'max' => 'Se requiere un máximo de 7 dígitos',
        ]);



        $request = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$tk,
        ])->PUT('https://farmecc.herokuapp.com/api/private/sucursal/'.$this->id_suc , [
            'nombre'=>$this->nombre,
            'ciudad'=>$this->ciudad,
            'telefono'=>$this->telefono,
            'direccion'=>$this->direccion,
        ]);

         
        session()->flash('message',
        $this->id_suc ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
        
        $this->cerrarModal2();
        $this->limpiarCampos();
    }


}
