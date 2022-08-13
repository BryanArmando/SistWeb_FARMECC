<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
            <p style="font-size: 30px" class="p-3 text-primary font-bold text-center">VISTA DE PRODUCTOS</p>  
                <table class="table-fixed w-full bg-light">
                    <div class="bg-white px-4 pb-4 sm:p-6 sm:pb-4">
                        <thead>
                            <tr class="bg-primary text-white">
                            <th scope="col" class="text-center">Nombre Genérico</th>
                                <th scope="col" class="text-center">Nombre Comercial</th>
                                <th scope="col" class="text-center">Descripción</th>
                                <th scope="col" class="text-center">Registro sanitario</th>
                                <th scope="col" class="text-center">Precio de venta</th>
                                <th scope="col" class="text-center">Precio de compra</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>
                                <th scope="col" class="text-center">Stock</th>
                            </tr>
                        </thead>
                        @foreach($productsArray as $item)
                        @if($item['cantidad'] > 10)
                            <tbody>
                
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
                            </tbody>

                        @endif
                        @endforeach
                    </div>
                </table>
            <div class="bg-gray-50 px-4 py-3 ">
                <span class="flex w-full">
                    <button wire:click="cerrarModal2()" type="button" class="inline-flex justify-center rounded-full border border-red-600 px-4 py-2 bg-red-700 text-base leading-6 font-medium text-white font-bold shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">CERRAR</button>
                </span>
            </div>

        </div>


    </div>
</div>