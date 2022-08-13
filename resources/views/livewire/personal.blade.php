<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-people-roof" style="padding-right:15px"></i>Listado del personal</p>
        <br>
        <!--MENSAJE DE INFORMACIÓN !-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex p-2">Visualiza a los empleados pertenecientes a cada sucursal. Busca según tu preferencia.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- SELECTED DE SUCURSALES!-->
        <div class="row">
            <div class="col-sm-6 text-left">
                <label style="color:#530DE9"><p style="font-size: 18px">Buscar:</label>
                <br>
                <div class="input-group content-center">
                    
                    <div class="">
                        <input class="form-control border  bg-white px-3" wire:model="buscarpersonal" type="text" id="form1" placeholder="Nombre o Apellido...">
                    </div>
                    <div class="form-outline input-group-append rounded">
                        <i class="material-icons prefix " style="font-size:30px">search</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <label style="color:#530DE9"><p style="font-size: 18px">Selecciona la sucursal:</label>
                <select wire:model="searchSucurpersonal" class="form-control text-primary">
                <option value="">No filtrar</option>
                @foreach($infosucursArray as $item)
                    <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                @endforeach
                
                </select>
            </div>
        </div>    

        <br>
        <hr>
        @if($searchSucurpersonal)
            @include('livewire.personalsucur')
        @endif
        @if($buscarpersonal)
            @include('livewire.buscarnombpersonal')
        @endif
 
        <br>
        <table class="table-fixed w-full bg-light" style="border-width: 2px;">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th scope="col" class="text-center pt-2 pb-2">Nombre</th>
                    <th scope="col" class="text-center pt-2 pb-2">Apellido</th>
                    <th scope="col" class="text-center pt-2 pb-2">Usuario</th>
                    <th scope="col" class="text-center pt-2 pb-2">Telefono</th>
                    <th scope="col" class="text-center pt-2 pb-2">Correo</th>
                    <th scope="col" class="text-center pt-2 pb-2">Sucursal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personalArray as $item)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$item['nombre']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['apellido']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['usuario']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['telefono']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['correo']}}</td>
                        <td class="border px-4 py-2 text-center">{{$item['sucursal']['nombre']}}</td>
                    </tr>
                @endforeach
                
            </tr>
            </tbody>
        </table>
        @php
            $suma=0;
        @endphp
        <table class="table-fixed w-full bg-light">
            <tbody>
                    <tr>
                        <td class="border px-4 py-2 text-center font-bold text-white bg-danger">TOTAL DE PERSONAL</td>
                        @foreach($personalArray as $item)
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
