
<div class="content-fluid backgcontenido">
    <div class="content-fluid ubi ">
        <p class="pb-0 mb-0">CATALOGO DE PRODUCTOS</p>
    </div>
    
    <div class="row justify-content-center" >
        <div class="col">
            <div class="row">
                <div class="col-3 pb-5 columna" >
                    <label class="text-white ">
                        <div class="row">
                            <div class="col-3 content-center pt-5 ">
                                <img class="pl-3 d-block" src="{{asset('slides/1243438.png')}}" width="400px" height="400px">
                            </div>
                            <div class="col-9 content-center pt-5" style="font-size: 20px">
                                <p style="font-weight:bolder;font-family: 'Nunito', sans-serif;">
                                    Busca un producto:
                                </p>
                                <div class="input-group content-center rounded-full" style="font-family: 'Nunito', sans-serif;">
                                    <input class="form-control  bg-white px-3" wire:model="buscarp" type="text" placeholder="Producto..." style="color: rgb(43, 107, 226); padding-left:15px; border-color:none; border-width:0px; border-radius:25px">
                                </div>
                            </div>                 
                        </div>    
                    </label>
                     
                </div>
                <div class="col-9">
                    <div class="container" style="display: flex; align-items:center; justify-content:center;font-family: 'Nunito', sans-serif;">
                        <div class="row " >
                            <div class="col-12 mt-2">
                                <div class="p-2 font-bold">
                                    <div class="inline-flex items-center bg-white leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                                        <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-lightbulb " style="padding-right: 4px"></i>Recuerda</span>
                                        <span class="inline-flex px-2">Aquí puedes buscar tus productos por su nombre genérico o comercial, para COTIZAR da click en "+".</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($buscarp)
                        @include('livewire.buscarcatalogo2')
                    @endif
                </div>
                
            </div>
            <div class="row">
                <div class="col-3 columna">
                    <div class="container" style="display: flex; align-items:center; justify-content:center;font-family: 'Nunito', sans-serif;">
                        <div class="row " >
                            <div class="col-12 mt-2">
                                <div class="p-2 font-bold">
                                    <div class="inline-flex items-center bg-white leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                                        <span class="inline-flex bg-primary text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-shield-heart"></i></span>
                                        <span class="inline-flex px-2">¡Desliza y conoce nuestros productos!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
                            <div class="carousel-indicators" >
                                @foreach($productsArray as $item)
                                <button type="button"   data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$item['id']}}" class="active" aria-current="true" aria-label="Slide 1"></button>
                                
                                @endforeach
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="{{asset('slides/farmac.jpg')}}" style="width: 300px; height:300px;">
                                </div>
                                @foreach($productsArray as $item)
                                    <div class="carousel-item">                               
                                        <img class="imgserv" src="{{$item['imagen']}}" style="width: 300px; height:300px;">
        
                                    </div>
                                @endforeach
                                
                            </div>
                            <button class="carousel-control-prev " style="filter: invert(100%);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" style="filter: invert(100%);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-9" style="font-family: 'Nunito', sans-serif;">
                    <div class="row justify-content-center">
                        
                        <!-- Elementos generados a partir del JSON -->
                        <div id="items" class="col-8 row">
                            <p class="text-center" style="border-radius:25px; border-color:rgb(75, 62, 190);  ;font-size: 30px; color:rgb(75, 62, 190); font-weight:bold; background-color:white"><i class="fa-solid fa-circle-check"></i> Revisa el catálogo completo</p>
                            @foreach($productsArray as $item)
                            <main class="col mt-5">
                                
                                <div class="card cardcat " style="width: 234px;margin: auto;margin-bottom: 20px;  padding:3px; border-width:2px; border-radius:25px; border-color:rgb(75, 62, 190); border-width:3px" >
                                    <div class="card-image mt-3" >
                                        <img class="imagencatalogo" src="{{$item['imagen']}}" alt="{{$item['nombreComercial']}}"  >
                                        <div class="row" style="">
                                            <span class="card-title text-center text-dark font-bold">{{$item['nombreComercial']}}</span>
                                        </div>
                                    </div>
                                    <div class="card-content mb-3" >
                                        <p class="text-center font-bold">{{$item['nombreGenerico']}}</p>
                                        <p class="text-center font-bold">{{$item['pvpVenta']}}</p>
                                        <div class="row">
                                            <button title="Agregar para cotizar" wire:click="agregar('{{$item['nombreComercial']}}',{{$item['id']}},{{$item['pvpVenta']}})" class="bg-transparent hover:bg-transparent text-center font-bold " style="font-size: 30px;color:rgb(44, 161, 44)">
                                                <i class="fa-solid fa-circle-plus"></i>
                                            </button>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </main>
                            @endforeach
                        </div>
                
                        @if ($agrcotizar)
                            @include('livewire.carrito')
                        @endif 
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    

</div>
<!-- PIE --> 
<div class="content-fluid foot mb-0">
    <p>Farmacias FARMECC 2022 <br> <br>© Creado por Diana Almeida </p>
</div>
