<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="justify-content-center" style="color: rgb(71, 30, 255); font-size:24px"><span style="font-weight: bold">Ventas de la sucursal:</span><span style="color: rgb(30, 101, 255);"> {{$sucurbuscarArray['nombre']}}</span></p>
        <table class="table-fixed w-full bg-light"  style="border-width: 2px;">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Medicamento</th>
                    <th scope="col" class="text-center pt-2 pb-2">Registro sanitario</th>
                    <th scope="col" class="text-center pt-2 pb-2">Cantidad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Fecha de venta</th>
                    <th scope="col" class="text-center pt-2 pb-2">Precio de venta</th>
                    <th scope="col" class="text-center pt-2 pb-2">Estado</th>

                </tr>
            </thead>
            <tbody>
                @foreach($ventassucurArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center pt-2">{{$item['medicamento']}}</td>
                        <td class="border px-4 py-2 text-center pt-2">{{$item['registro_sanitario']}}</td>
                        <td class="border px-4 py-2 text-center pt-2">{{$item['cantidad']}}</td>
                        <td class="border px-4 py-2 text-center pt-2">{{$item['fecha_venta']}}</td>
                        <td class="border px-4 py-2 text-center pt-2">$ {{$item['pvp_venta']}}</td>
                        <td class="text-center">
                            @if($item['pvp_venta'] >= 0 && $item['pvp_venta'] < 10)
                            
                            <button class=" rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2" style="font-size: 10px">MUY POCO CONSUMIDO</button>
                            <i class="fa-solid fa-triangle-exclamation text-danger"></i>

                            @endif

                            @if($item['pvp_venta'] >= 10 && $item['pvp_venta'] <= 20)
                                <button class=" rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2" style="font-size: 10px">POCO CONSUMIDO  <i class="fa-solid fa-circle-info"></i></button>
                            @endif
                            @if($item['pvp_venta'] > 20 )
                                <button class=" rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2" style="font-size: 10px"> GRANDEMENTE CONSUMIDO</button>
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
                        @foreach($ventassucurArray as $item)
                        @php
                            $suma = $suma + $item['pvp_venta'];
                        @endphp
                        @endforeach
                        <td class="border px-4 py-2 text-center ">
                            <h6 class="font-bold">$ {{$suma}}</h6>
                        </td>
                    </tr>
                    
            </tbody>

        </table>
    </div>
</div>