<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">

        
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-dolly" style="padding-right:15px"></i>Stock de productos</p>
        <br>
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex p-2">Aquí puedes visualizar los productos existentes en las sucursales de FARMECC.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SELECTED DE SUCURSALES!-->
        <div class="row pt-2">
            <div class="col-sm-6 text-left">
                <label style="color:#530DE9"><p style="font-size: 18px">Selecciona la sucursal:</label>
                    <select wire:model="searchSucursal" class="form-control text-primary">
                        <option value="">No filtrar</option>
                        @foreach($infosucursArray as $item)
                            <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                        @endforeach
                        
                    </select>
            </div>
            <div class="col-sm-6 text-right">
                <label style="color:#530DE9"><p style="font-size: 18px">Busca el producto:</label>
                <br>
                <div class="input-group content-center">
                    <div class="">
                        <input class=" form-control border  bg-white px-3" wire:model="searchTerm" type="text" id="form1" placeholder="Producto...">
                    </div>
                    <div class="form-outline input-group-append rounded">
                        <i class="material-icons prefix small" style="font-size:40px">search</i>
                    </div>
                </div>
            </div>
        </div>        
        <br>
        @if($searchTerm)
            @include('livewire.buscartablaProduc')
        @endif
        @if($searchSucursal)
            @include('livewire.buscarproductxsucur')
        @endif
        <br>

        <p class="font-bold" style="font-size:25px; color:#530DE9"><i class="fa-solid fa-boxes-stacked" style="padding-right:15px"></i>Lista de productos</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-lightbulb " style="padding-right: 7px"></i>Recuerda</span>
                            <span class="inline-flex p-2">Puedes realizar los pedidos de tus productos agotados, sólo da CLICK donde se muestre la advertencia AGOTADO.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Nombre Genérico</th>
                    <th scope="col" class="text-center pt-2 pb-2">Nombre Comercial</th>
                    <th scope="col" class="text-center pt-2 pb-2">Descripción</th>
                    <th scope="col" class="text-center pt-2 pb-2">Registro sanitario</th>
                    <th scope="col" class="text-center pt-2 pb-2">Precio de venta</th>
                    <th scope="col" class="text-center pt-2 pb-2">Precio de compra</th>
                    <th scope="col" class="text-center pt-2 pb-2">Cantidad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>
                    <th scope="col" class="text-center pt-2 pb-2">Stock</th>

                </tr>
            </thead>
            <tbody>
                @foreach($productsArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombreGenerico']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['nombreComercial']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['descripcion']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['registroSanitario']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['pvpVenta']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['pvpCompra']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['cantidad']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['sucursal']['nombre']}}</td>
                        <td class="text-center">
                            @if($item['cantidad'] == 0)
                            <a href="{{route('pedidos')}}">
                                <button class="text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" >AGOTADO</button>
                                <i class="fa-solid fa-triangle-exclamation text-danger"></i>

                            </a>
                            @endif

                            @if($item['cantidad'] >= 1 && $item['cantidad'] <= 10)
                                
                                <button class="text-xs rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4" >POR AGOTARSE  <i class="fa-solid fa-circle-info"></i></button>
                                
                            
                            @endif
                            @if($item['cantidad'] > 10 )
                                
                                <button class="text-xs rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4">DISPONIBLE</button>
                                <i class="fa-solid fa-thumbs-up text-success"></i>
                            @endif
                        </td>
                        
                    </tr>

                @endforeach
            </tbody>

        </table>
        <br>
        <hr/>
        <br>
        <p class="font-bold" style="font-size:25px; color:#530DE9"><i class="fa-solid fa-square-check" style="padding-right:15px"></i>Resultados en tiempo real</p>
        <br>
        @php
            $suma=0;
            $suma1 =0;
            $suma2=0;
            $suma3=0;
        @endphp

        @if($modalver)
            @include('livewire.verproductos')
        @endif
        @if($modalver1)
            @include('livewire.verproductos1')
        @endif
        @if($modalver2)
            @include('livewire.verproductos2')
        @endif
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Resultados</th>
                    <th scope="col" class="text-center pt-2 pb-2">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td class="border px-4 py-2 text-center">Productos agotados</td>
                        @foreach($productsArray as $item)
                            @if($item['cantidad'] == 0)
                                @php
                                    $suma ++;
                                @endphp

                            @endif
                        @endforeach
                        <td class="border px-4 py-2 text-right">
                            <div class="row">
                                <div class="col-md-6">
                                    {{$suma}}
                                </div>
                                <div class="col-md-6">
                                    <button wire:click="ver()"class="right-0 text-xs rounded-full  bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">VER</button>
                                    <i class="fa-solid fa-eye text-danger"></i>

                                    
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 text-center">Productos por agotarse</td>
                        @foreach($productsArray as $item)
                            @if($item['cantidad'] >= 1 && $item['cantidad'] <= 10)
                                @php
                                    $suma1 ++;
                                @endphp
                                
                            @endif
                        @endforeach
                        <td class="border px-4 py-2 text-right">
                            <div class="row">
                                <div class="col-md-6">
                                    {{$suma1}}
                                </div>
                                <div class="col-md-6">
                                    <button wire:click="ver1()" class="right-0 text-xs rounded-full  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">VER</button>
                                    <i class="fa-solid fa-eye text-danger"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 text-center">Productos disponibles</td>
                        @foreach($productsArray as $item)
                            @if($item['cantidad'] >= 11)
                                @php
                                    $suma2 ++;
                                @endphp
                            @endif
                        @endforeach
                        <td class="border px-4 py-2 text-right">
                            <div class="row">
                                <div class="col-md-6">
                                    {{$suma2}}
                                </div>
                                <div class="col-md-6">
                                    <button wire:click="ver2()" class="right-0 text-xs rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4">VER</button>
                                    <i class="fa-solid fa-eye text-danger"></i>
                                </div>
                            </div>    

                        </td>
                        
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 text-center bg-danger text-white font-bold">TOTAL DE PRODUCTOS</td>
                        @foreach($productsArray as $item)
                            @php
                                $suma3 ++;
                            @endphp
                        
                        @endforeach
                        <td class="border px-4 py-2 text-center font-bold">{{$suma3}} </td>
                    </tr>
            </tbody>

        </table>

    </div>
</div>