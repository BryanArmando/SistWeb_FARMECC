<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">
        <div class="container" style="display: flex; align-items:center; justify-content:center;font-family: 'Nunito', sans-serif;">
            <div class="row " >
                <div class="col-12 mt-2">
                    <div class="p-2 font-bold">

                        <div class="inline-flex items-center bg-white leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                            <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-lightbulb " style="padding-right: 4px"></i>  ¿Cómo iniciar?</span>
                            <span class="inline-flex px-2">Selecciona la opción que necesites y empieza a administrar.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 ">
            <div class="col-4">
                <a  href="{{ route('gestsucursales') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/gestsucur.png')}}" width="150px" height="150px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">Gestión de sucursales</h3>
                        <p class="text-light" style="font-size: 14px">Crea, modifica y elimina sucursales</p>
                        </div>
                    </div>
                </a>    

            </div>  
            <div class="col-4"> 
                <a href="{{ route('productos') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/medic.png')}}" width="150px" height="150px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 22px">Stock de productos</h3>
                            <p class="text-light" style="font-size: 14px">Productos disponibles, por agotarse y agotados</p>
                        </div>
                    </div>
                </a>     
                
            </div> 
            <div class="col-4"> 
                <a href="{{ route('repsucursales') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/docspdf.png')}}" width="150px" height="150px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 20px">Reportes de ventas</h3>
                            <p class="text-light" style="font-size: 14px">Reportes PDF por fechas y según las sucursales</p>
                        </div>
                    </div>
                </a>     
            </div> 

        </div>
        <div class="row pt-5 pb-5">
            <div class="col-4">
                <a href="{{ route('ventas') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/ventasg.png')}}" width="150px" height="150px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">Ventas</h3>
                            <p class="text-light" style="font-size: 14px">Revisa las ventas realizadas en las sucursales y ventas totales</p>
                        </div>
                    </div>
                </a>      
                
            </div>  
            <div class="col-4">  
                <a href="{{ route('pedidos') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/pedidos15.png')}}" width="150px" height="150px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">Pedidos a proveedores</h3>
                            <p class="text-light" style="font-size: 14px">Pedidos de productos a proveedores calificados</p>
                        </div>
                    </div>
                </a>    
                
            </div> 


            <div class="col-4">  
                <a href="{{ route('personal') }}">
                    <div class="ubi11 my-auto row m-1" style="height:170px; padding:14px" >
                        <div class="col-4">
                            <img class="mx-auto d-block" src="{{asset('slides/personal15.png')}}" width="200px" height="200px">
                        </div>
                        <div class="col-8">
                            <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">Personal</h3>
                            <p class="text-light" style="font-size: 14px">Visión general del personal contratado y por sucursales</p>
                        </div>
                    </div>
                </a>    
                
            </div> 

        </div>
    </div>
</div>
