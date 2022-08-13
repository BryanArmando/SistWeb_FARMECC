
<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-rectangle-list" style="padding-right:15px"></i>Gestión de sucursales</p>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex px-2">Aquí puedes crear, modificar, editar y borrar sucursales. LLena el formulario</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="bg-primary rounded-b text-white px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">{{ session('message')}}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- SELECTED DE SUCURSALES!-->
        <div class="row pt-2">
            <div class="col-sm-4">
                <label style="color:#530DE9"><p style="font-size: 18px">Selecciona la sucursal:</label>
                <select wire:model="searchSucur" class="form-control text-primary">
                    <option value="">No filtrar</option>
                    @foreach($infosucursArray as $item)
                        <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="col-sm-8 text-right">
                <button wire:click="crear()" class="rounded-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" ><i class="fa-solid fa-plus"></i> Nuevo</button>
            </div>
        </div>        

        @if($searchSucur)
            @include('livewire.buscarsucur')
            
        @endif

        @if($modal)
            @include('livewire.crear' ,['tokenok'=> $tokenok])
        @elseif($modal2)
            @include('livewire.guardaredicion' ,['tokenok'=> $tokenok])
        @elseif($modal3)
            @include('livewire.menudesplegable' ,['tokenok'=> $tokenok])
        @elseif($modal4)
            @include('livewire.menudesplegable2' ,['tokenok'=> $tokenok])
        @endif

        <br>

        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>
                    <th scope="col" class="text-center pt-2 pb-2">Ciudad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Telefono</th>
                    <th scope="col" class="text-center pt-2 pb-2">Dirección</th>
                    <th scope="col" class="text-center pt-2 pb-2">Acciones</th>    
                </tr>
            </thead>
            <tbody >
                @foreach($infosucursArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombre']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['ciudad']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['telefono']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['direccion']}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$item['id']}})" class="text-xs rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 m-3">EDITAR <i class="fa-solid fa-pen-to-square"></i></button>  

                            <button wire:click="confirmar({{$item['id']}})" class="text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 " id="frm_eliminar">BORRAR <i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
