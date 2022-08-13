<!-- CONTACTOS -->

<div class="content-fluid " style="font-family: 'Nunito', sans-serif;">
    <div class="content-fluid ubi ">
        <p class="pb-0 mb-0">CONOCE A NUESTROS DOCTORES</p>      
    </div>
        
    <div class="row " style="font-family: 'Nunito', sans-serif; ">
        <div class="grid grid-cols-2 gap-4">
            @foreach($doctorsArray as $doctor)
                <div class="columna4 h-72 m-8 static rounded-lg " style="width: 36rem;" >
                    <div class="columna3 h-72 -m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in " style="width: 36rem;">
                        <h1 class="m-4 columna2 text-2xl font-bold fuente text-center" style="color: white; border-radius:15px"><i class="fa-solid fa-user-doctor"></i>  {{$doctor['nombre']}} {{$doctor['apellido']}}</h1>
                        <hr class="m-4 rounded-2xl border-t-2">
                        <p class="m-4 fuente"> <span class="font-bold text-primary"  ><i class="fa-solid fa-building-circle-check" style="color: blueviolet"></i>     SUCURSAL: </span> Disponible para todas las sucursales</p>
                        <p class="m-4 fuente"> <span class="font-bold text-primary"  ><i class="fa-solid fa-location-dot" style="color: blueviolet"></i>     DIRECCIÓN: </span>Quito, Argelia E379</p>
                        <p class="m-4 fuente"> <span class="font-bold text-primary"  ><i class="fa-solid fa-phone" style="color: blueviolet"></i>     TELÉFONO: </span>(02) 2255 784</p>
                        <p class="m-4 fuente"> <span class="font-bold text-primary"  ><i class="fa-solid fa-magnifying-glass-arrow-right" style="color: blueviolet"></i>    ESPECIALIDAD: </span>{{$doctor['descripcion']}}</p>
                        <img  src="{{$doctor['urlImagen']}}" alt="" width="250px" height="250px"  style="">
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>

</div>

