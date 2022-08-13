

@php
    $fechactual = date('d-m-Y');
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 p-5">
            <div style="background-color: rgb(255, 255, 255)">
                <div class="card-header font-bold text-white bg-primary" ><h6><i class="fa-solid fa-file-pen"></i>  Reportes de ventas a nivel nacional por sucursal</h6></div>
                <div class="card-body">
                     <!-- SELECTED DE SUCURSALES!-->
                    <div class="col-sm-12">
                        <label style="color:#530DE9"><h6>Selecciona la sucursal:</h6></label>
                        <select wire:model="reportsucursal" class="form-control text-primary">
                            <option value="">No filtrar</option>
                            @foreach($infosucursArray as $item)
                                <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                            @endforeach
                            
                        </select>
                        @error('reportsucursal') <span class="text-danger error">{{$message}}</span>@enderror
                    </div>
                    <br>
                    <form>
                        @csrf
                        <img class="mx-auto d-block " src="{{asset('slides/resport.png')}}" width="200px" height="200px">
                        <div class="row text-center">
                            <div class="col-12 text-center">
                            <i class="fa-duotone fa-file-chart-pie"></i>
                            <button class="text-center rounded-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 " wire:click.prevent="fechasucur()" ><i class="fa-solid fa-file-circle-check"></i>   GENERAR REPORTE</button>                       
                            
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-5">
            <div class="card" >
                <div class="card-header font-bold text-white bg-primary" ><h6><i class="fa-solid fa-file-pen"></i>  Reportes de ventas a nivel nacional por fecha</h6></div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="row mb-3">
                            
                            <label  class="col-md-4 col-form-label text-md-end font-bold " style="color:#530DE9" >{{ __('Desde ') }}</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input class="form-control border text-primary bg-white px-3" wire:model="fechaini" type="date"  placeholder="Fecha inicial" >
                                    @error('fechaini') <span class="text-danger error">{{$message}}</span>@enderror
                                </div>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            
                            <label  class="col-md-4 col-form-label text-md-end font-bold " style="color:#530DE9">{{ __('Hasta') }}</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control border text-primary bg-white px-3" wire:model="fechafin" type="date" placeholder="Fecha final">
                                    @error('fechafin') <span class="text-danger error">{{$message}}</span>@enderror
    
                                </div>
                            </div>
                        </div>
    
                        
    
                        <div class="row text-center">
                            <div class="col-12 text-center">
                            <i class="fa-duotone fa-file-chart-pie"></i>
                            <button class="text-center rounded-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 my-3" wire:click.prevent="fecha()" ><i class="fa-solid fa-file-circle-check"></i>   GENERAR REPORTE</button>
                            
                        </div>
    
                        </div>
                    </form>
                </div>
            </div>
    
            <div class="card" >
                <div class="card-header font-bold text-white bg-primary" ><h6><i class="fa-solid fa-file-pen"></i>  ¿Necesitas un reporte de todas las ventas?</h6></div>
                <div class="card-body">
    
                        <div class="row text-center">
                            <div class="col-12 text-center">
                            
                                <button class="text-center rounded-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 my-3" wire:click.prevent="fechatotal()" >
                                    <i class="fa-solid fa-file-circle-check"></i>
                                    
                                       GENERAR REPORTE
                                </button>
                            
                        </div>
    
                </div>
            </div>
      
        </div>
      
    </div>
</div>




