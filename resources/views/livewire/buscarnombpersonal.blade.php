<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="justify-content-center" style="color: rgb(71, 30, 255); font-size:24px"><span style="font-weight: bold">Resultados de la búsqueda:</span><span style="color: rgb(30, 101, 255);"> {{$buscarpersonal}}</span></p>
        <table class="table-fixed w-full bg-light">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Apellido</th>
                    <th scope="col" class="text-center">Usuario</th>
                    <th scope="col" class="text-center">Telefono</th>
                    <th scope="col" class="text-center">Correo</th>
                    <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>

                </tr>
            </thead>
            <tbody>
                @foreach($buscarpersArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombre']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['apellido']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['usuario']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['telefono']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['correo']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['sucursal']['nombre']}}</td>
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
                        <td class="border px-4 py-2 text-center font-bold text-white bg-danger">TOTAL DE PERSONAL</td>
                        @foreach($buscarpersArray as $item)
                        @php
                            $suma = $suma + 1;
                        @endphp
                        @endforeach
                        <td class="border px-4 py-2 text-center ">
                            <h6 class="font-bold">{{$suma}}</h6>
                        </td>
                    </tr>
                    
            </tbody>

        </table>
    </div>
</div>
<hr>