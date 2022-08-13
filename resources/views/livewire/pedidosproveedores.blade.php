<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-street-view" style="padding-right:15px"></i>Pedidos a proveedores</p>
        <br>
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex p-2">Crea, modifica, edita y borra pedidos.Llena los formularios según se requiera.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @if(session()->has('message'))
            <div class="bg-primary rounded-b text-white px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">{{ session('message')}}</p>
                    </div>
                </div>
            </div>
        @endif
        <br>
        
        <button wire:click="crear()" class="rounded-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 " ><i class="fa-solid fa-plus"></i>  Nuevo</button>

        
        @if($modal)
            @include('livewire.crearpedido',['tokenok'=> $tokenok])
        @elseif($modal2)
            @include('livewire.guardaredicionpedidos',['tokenok'=> $tokenok])
        @elseif($modal3)
            @include('livewire.menudesplegablepedidos',['tokenok'=> $tokenok])
        @endif


        <br>

        <p class="font-bold" style="font-size:25px; color:#530DE9"><i class="fa-solid fa-boxes-stacked" style="padding-right:15px"></i>Lista de pedidos realizados</p>
        <br>
        
        <br>
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Proveedor</th>
                    <th scope="col" class="text-center pt-2 pb-2">Producto pedido</th>
                    <th scope="col" class="text-center pt-2 pb-2">Cantidad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Acciones</th>      
                </tr>
            </thead>
            <tbody>
                
                @foreach($pedidosArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombreProveedor']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['productoPedido']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['cantidad']}}</td>
                        <td class=" text-center">
                            <button wire:click="editar({{$item['id']}},{{$item['cantidad']}},'{{$item['nombreProveedor']}}','{{$item['productoPedido']}}')" class="text-xs rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 m-3">EDITAR <i class="fa-solid fa-pen-to-square"></i></button>  

                            <button wire:click="confirmar({{$item['id']}})" class="text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 " id="frm_eliminar">BORRAR <i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <hr/>
        <br>
        <p class="font-bold" style="font-size:40px; color:#530DE9"><i class="fa-solid fa-boxes-stacked" style="padding-right:15px"></i>Lista de Proveedores disponibles</p>
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex p-2">Busca, agrega, modifica, edita y borra proveedores.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        

        @if(session()->has('message'))
            <div class="bg-primary rounded-b text-white px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">{{ session('message')}}</p>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="row pt-2">
            <div class="col-sm-4">
                <label style="color:#530DE9"><p style="font-size: 18px">Selecciona el proveedor:</label>
                <select wire:model="proveedorid" class="form-control text-primary">
                    <option value="">No filtrar</option>
                    @foreach($proveedoresArray as $item)
                        <option value="{{$item['id']}}">{{$item['nombreProveedor']}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="col-sm-8 text-right">
                <button wire:click="crearprov()" class="rounded-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 " ><i class="fa-solid fa-plus"></i>  Nuevo</button>
            </div>
        </div> 

        @if($proveedorid)
            @include('livewire.buscarprov',['tokenok'=> $tokenok])
        @endif

        @if($modal4)
            @include('livewire.crearproveedor',['tokenok'=> $tokenok])
        @elseif($modal5)
            @include('livewire.guardaredicionproveed',['tokenok'=> $tokenok])
        @elseif($modal6)
            @include('livewire.menudesplegableprov',['tokenok'=> $tokenok])
        @endif
        <br>
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Proveedor</th>
                    <th scope="col" class="text-center pt-2 pb-2">Número de contacto</th>
                    <th scope="col" class="text-center pt-2 pb-2">Dirección</th>
                    <th scope="col" class="text-center pt-2 pb-2">RUC</th>
                    <th scope="col" class="text-center pt-2 pb-2">Acciones</th>        
                </tr>
            </thead>
            <tbody>
                
                @foreach($proveedoresArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombreProveedor']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['numContactoProveedor']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['direccion']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['ruc']}}</td>
                        <td class=" text-center">
                            <button wire:click="editarprov({{$item['id']}},'{{$tokenok}}')" class="text-xs rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 m-3">EDITAR <i class="fa-solid fa-pen-to-square"></i></button>  

                            <button wire:click="confirmarprov({{$item['id']}})" class="text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 " id="frm_eliminar">BORRAR <i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
