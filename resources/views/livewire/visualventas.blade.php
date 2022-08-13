<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-dolly" style="padding-right:15px"></i>Ventas a nivel nacional</p>
        <br>
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-cart-plus" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex p-2">Aqui puedes visualizar las ventas por sucursales. Realiza tus búsquedas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SELECTED DE SUCURSALES!-->
        <div class="row">
            <div class="col-sm-3">
                <label style="color:#530DE9"><p style="font-size: 18px">Selecciona la sucursal:</label>
                <select wire:model="selectedsucursales" class="form-control text-primary">
                    <option value="">No filtrar</option>
                    @foreach($infosucursArray as $item)
                        <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="col-sm-9 text-right mt-5">
                <a class=" rounded-full bg-pink-600 hover:bg-blue-600 text-white font-bold py-2 px-4 my-3" href="{{route('repsucursales')}}" >  
                    ¿GENERAR REPORTE?
                    <i class="fa-solid fa-file-pdf" style="font-size: 20px">  </i>
                </a>
            </div>
        </div>
        <br>

        @if($selectedsucursales)
            @include('livewire.ventasxsucur',['tokenok'=> $tokenok])
        @endif
        
        <p class="font-bold" style="font-size:25px; color:#530DE9"><i class="fa-brands fa-shopify" style="padding-right:15px"></i>Ventas totales</p>
        <br>
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Medicamento</th>
                    <th scope="col" class="text-center pt-2 pb-2">Registro sanitario</th>
                    <th scope="col" class="text-center pt-2 pb-2">Cantidad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Fecha de venta</th>
                    <th scope="col" class="text-center pt-2 pb-2">Precio de venta</th>
                    <th scope="col" class="text-center pt-2 pb-2">Estado</th>

                </tr>
            </thead>
            <tbody>
                @foreach($ventasArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['medicamento']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['registro_sanitario']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['cantidad']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['fecha_venta']}}</td>
                        <td class="border px-4 py-2 text-center">$ {{$item['total_venta']}}</td>
                        <td class="text-center">
                            @if($item['pvp_venta'] >= 0 && $item['pvp_venta'] < 10)
                            
                            <button class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2" style="font-size: 10px" >MUY POCO CONSUMIDO</button>
                            <i class="fa-solid fa-triangle-exclamation text-danger"></i>

                            @endif

                            @if($item['pvp_venta'] >= 10 && $item['pvp_venta'] <= 20)
                                <button class=" rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2" style="font-size: 10px">POCO CONSUMIDO  <i class="fa-solid fa-circle-info"></i></button>
                            @endif
                            @if($item['pvp_venta'] > 20 )
                                <button class="rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2" style="font-size: 10px"> GRANDEMENTE CONSUMIDO</button>
                                <i class="fa-solid fa-thumbs-up text-success"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @php
            $suma=0;
        @endphp
        <table class="table-fixed w-full bg-light">
            <tbody>
                    <tr>
                        <td class="border px-4 py-2 text-center font-bold text-white bg-danger">TOTAL DE VENTAS</td>
                        @foreach($ventasArray as $item)
                        @php
                            $suma = $suma + $item['total_venta'];
                        @endphp
                        @endforeach
                        <td class="border px-4 py-2 text-center ">
                            <h6 class="font-bold"> $ {{$suma}}</h6>
                        </td>
                    </tr>
                    
            </tbody>

        </table>
        <br>
        <hr/>
    </div>
</div>