<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <p class="font-bold" style="font-size: 40px; color:#530DE9"><i class="fa-solid fa-dolly" style="padding-right:15px"></i>Generar reportes de ventas</p>
        <br>
        <div class="content-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="p-2 font-bold">
                        <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                            <span class="inline-flex px-2">Aquí puedes visualizar los reportes de ventas en PDF ingresando la FECHA.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        @include('livewire.fecha',['tokenok'=> $tokenok]) 
    </div>
</div>
