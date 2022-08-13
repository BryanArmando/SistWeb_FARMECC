<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">Recuerda</span>
                            <span class="inline-flex px-2">Aquí puedes visualizar los productos existentes en las sucursales de FARMECC con sus cantidades</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-gray-900 font-bold text-danger">Stock de productos</h3>

        <table class="table-fixed w-full bg-light">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center">Nombre Genérico</th>
                    <th scope="col" class="text-center">Nombre Comercial</th>
                    <th scope="col" class="text-center">Descripción</th>
                    <th scope="col" class="text-center">Precio</th>
                    <th scope="col" class="text-center">Cantidad</th>
                    <th scope="col" class="text-center">Disponibilidad</th>

                </tr>
            </thead>
            <tbody>
                @foreach($productsstockArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombreGenerico']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['nombreComercial']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['descripcion']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['pvpVenta']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['cantidad']}}</td>
                        <td class="border px-4 py-2 text-center">Disponible</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
