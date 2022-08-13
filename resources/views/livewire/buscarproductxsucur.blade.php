<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">

        <p class="font-bold" style="font-size: 30px; color:rgb(37, 65, 223)">Resultados de la búsqueda: <span style="color:crimson"> {{$sucurbus1Array['nombre']}}</span> </p>
        <table class="table-fixed w-full bg-light">
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
            <tbody>
                @foreach($buscprodxsucurArray as $item)
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
                                <button class=" text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 ">AGOTADO</button>
                                <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                            </a>
                            @elseif($item['cantidad'] <= 10)
                                <button class="text-xs rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">POR AGOTARSE <i class="fa-solid fa-circle-info"></i></button>
                            @else
                                <button class="text-xs rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4">DISPONIBLE</button>
                                <i class="fa-solid fa-thumbs-up text-success"></i>
                            @endif

                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<hr>