<!-- COROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators" >
        <button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" style="filter: invert(100%);" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="{{asset('slides/ptwelcome.png')}}" style="width: 100%; height:auto;">
            <div class="carousel-caption ">
                <a type="button" class="cotiza btn bg-warning" href="{{ route('catalogo.listcatalogo') }}">COTIZAR PRODUCTOS</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="imgserv" src="{{asset('slides/preciospd.png')}}" style="width: 100%; height:auto;">
        </div>
        <div class="carousel-item">
            <img src="{{asset('slides/p2.png')}}" style="width: 100%; height:auto;">
            <div class="carousel-caption ">
                <a wire:model='sicatalogoabrir' type="button" class="cotiza btn bg-warning" href="{{ route('catalogo.listcatalogo') }}">CATÁLOGO</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" style="filter: invert(100%);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" style="filter: invert(100%);" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- MISIÓN Y VISIÓN-->
<div class="content-fluid ubi">
    <p style="margin-bottom: 0px;" >CONOCE SOBRE NOSOTROS</p>
</div>
<div class="content-fluid rbackg" >
   <div class="container">
    <div class="row pt-5 " >
        <!-- service block -->
        @foreach($infoArray as $infor)
            <div class="col-4">
                
                <div class="ubi1 my-auto" style="height:430px; padding:14px" >
                    <img class="mx-auto d-block" src="{{asset('slides/mision1.png')}}" width="150px" height="150px">
                    <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">MISIÓN</h3>
                    <p class="text-light">{{$infor['mision']}}</p>
                </div>
            </div>  
        @endforeach
        @foreach($infoArray as $infor)
            <div class="col">
                <div class="ubi1 "  style="height:430px; padding:60px">
                    <img class="mx-auto d-block" src="{{asset('slides/vision1.png')}}" width="150px" height="150px">
                    <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">VISIÓN</h3>
                    <p class="text-light">{{$infor['vision']}}<br></p>
                </div>
            </div>  
        @endforeach
        @foreach($infoArray as $infor)
            <div class="col" >
                <div class="ubi1"  style=" height:430px; padding:60px">
                    <img class="mx-auto d-block" src="{{asset('slides/weare1.png')}}" width="150px" height="150px">
                    <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">SOBRE NOSOTROS</h3>
                    <p class="text-light">{{$infor['nosotros']}}</p>
                </div>
            </div>  
        @endforeach
          
        
    </div>
</div>
    
<!-- ENCUÉNTRANOS -->
<div class="content-fluid ubi mt-5">
    <p style="margin-bottom: 0px;">ENCUÉNTRANOS</p>
</div>

<div class="content-fluid rbackg " style="padding-bottom: 30px">
    <div class="container ">
        
        <div class=" row pt-5">
            
            
            <!-- service block -->
            @foreach($infosucursArray as $inforsu)
            <div class="col">
                
                <div class="ubi2"  style="padding: 32px; height:300px">
                    <img class="mx-auto d-block" src="{{asset('slides/farmacia.png')}}" width="100px" height="100px">
                    <h3 class="text-lg leading-normal mb-2 font-bold text-light" style="font-size: 24px">{{$inforsu['nombre']}}</h3>
                    <p class="text-light text-center pl-2" style="font-size: 15px">{{$inforsu['ciudad']}}</p>
                    <p class="text-light text-center" style="font-size: 15px">{{$inforsu['direccion']}}</p>
                    <p class="text-light text-center" style="font-size: 15px">{{$inforsu['telefono']}}</p>
                </div>
            </div>  
            @endforeach
            <div class="col">
                <img class="mx-auto d-block" src="{{asset('slides/doc.gif')}}" width="500px" height="500px">
            </div>
        </div>
    </div>
</div>


<!-- NUESTROS SERVICIOS -->
<div class="content-fluid ubi">
    <p class="pb-0 mb-0">NUESTROS SERVICIOS</p>
    </div>
</div>
<div class="content-fluid rbackg">

        <div class="row" >
            
            <div class="col-5 p-5">
                <div class="ubi3 mx-auto d-block "  style="padding: 48px; margin:auto"> 
                    <p  style="text-align:left; padding-left:15px;">Servicios a tu disposición, revisa nuestra página y entérate de los servicios que disponemos así como nuestro catálogo.</p>
                    <div>
                        <img class="mx-auto d-block " src="{{asset('slides/pueblo.png')}}" width="600px" height="300px">
                    </div>

                </div>
                
                
                
            </div>
            <div class="col-2" style="margin:auto">
                <img class="mx-auto d-block " src="{{asset('slides/flecha.gif')}}" width="600px" height="500px">
            </div>
            <div class="col-5" style="text-align:center;display: flex;justify-content: end;padding: 0;">
                
                <img  src="{{asset('slides/servicios.png')}}" class="" alt="..." width="500px" height="500px" >
            </div>
            
        </div>
        <div class="container">
        <div class="row" style="margin-top: 38px;">
            <div class="col"></div>
            <div class="col">
                <a  type="button" class=" mt-5 btncata pt-2" style="padding: 12px; margin-left: 99px;text-decoration: none; "  href="{{ route('catalogo.listcatalogo') }}">
                    <i class="fa-solid fa-book-open"></i> IR AL CATÁLOGO
                </a >
                    <img class="mx-auto d-block" src="{{asset('slides/serv1.gif')}}" width="400px" height="400px">
            </div>
            <div class="col"></div>
                    
        </div>
    </div>
</div>

<!-- PIE --> 
<div class="content-fluid foot mb-0">
    <p>Farmacias FARMECC 2022 <br> <br>© Creado por Diana Almeida </p>
</div>