<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Personal extends Component
{
    public $searchSucurpersonal;
    public $buscarpersonal;
    public $sucurxpersonal;
    public $tokenok;


    public function render()
    {
        $personal = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/personal');
        $personalArray = $personal->json();

        //Info sucursales
        $infosucurs = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal');
        $infosucursArray = $infosucurs->json();
        //Buscar personal por sucursal
        $sucurbuscpersonal = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/sucursal/'.$this->searchSucurpersonal.'/personal');
        $sucurbuscpersonalArray = $sucurbuscpersonal->json();
        //Nombre de sucursal
        $sucurbusc = HTTP::get('https://farmecc.herokuapp.com/api/public/sucursal/'.$this->searchSucurpersonal); 
        $sucurbuscArray3 = $sucurbusc->json();
        //Buscar Personal
        $buscarpers = Http::withHeaders([
            'Accept'=>'application/json',
            'Content-Type'=>'application/json',
            'Authorization' =>'Bearer '.$this->tokenok,
        ])->GET('https://farmecc.herokuapp.com/api/private/personalfilter/'.$this->buscarpersonal);
        $buscarpersArray = $buscarpers->json();
        
        return view('livewire.personal', compact('personalArray','sucurbuscpersonalArray', 'infosucursArray', 'sucurbuscArray3','buscarpersArray'));
    }
    

}
