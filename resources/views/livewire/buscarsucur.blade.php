<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="font-bold" style="font-size: 30px; color:rgb(37, 65, 223)">Resultados de la búsqueda: <span style="color:crimson"> {{$sucurbuscArray['nombre']}}</span> </p>
        <table class="table-fixed w-full bg-light">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>
                    <th scope="col" class="text-center pt-2 pb-2">Ciudad</th>
                    <th scope="col" class="text-center pt-2 pb-2">Telefono</th>
                    <th scope="col" class="text-center pt-2 pb-2">Dirección</th>
                    <th scope="col" class="text-center pt-2 pb-2">Acciones</th>  
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2 text-center">{{$sucurbuscArray['nombre']}}</td>
                    <td class="border px-4 py-2 text-center">{{$sucurbuscArray['ciudad']}}</td>
                    <td class="border px-4 py-2 text-center">{{$sucurbuscArray['telefono']}}</td>
                    <td class="border px-4 py-2 text-center">{{$sucurbuscArray['direccion']}}</td>
                    <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$sucurbuscArray['id']}})" class="text-xs rounded-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 m-3">EDITAR <i class="fa-solid fa-pen-to-square"></i></button>
                              
                            <button wire:click="confirmar1({{$sucurbuscArray['id']}})" class="text-xs rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 " id="frm_eliminar">BORRAR <i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<hr>