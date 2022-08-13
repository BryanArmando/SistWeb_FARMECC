<div class="container">
    <p class="justify-content-center" style="color: rgb(71, 30, 255); font-size:24px"><span style="font-weight: bold">Resultados de la búsqueda:</span><span style="color: rgb(30, 101, 255);"> {{$buscarp}}</span></p>
    <div class="row pt-5">
        @foreach($productsbuscArray1 as $item)
            <div class="col">
                <div class="card cardcat" style="width: 234px;margin: auto;margin-bottom: 20px; border-width:2px; border-radius:25px; border-color:rgb(75, 62, 190); border-width:3px">
                    <div class="card-image mt-3">
                        <img class="imagencatalogo" src="{{$item['imagen']}}" alt="{{$item['nombreComercial']}}">
                        <div class="row">
                        <span class="card-title text-center text-dark font-bold">{{$item['nombreComercial']}}</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="text-center font-bold">{{$item['nombreGenerico']}}</p>
                        <p class="text-center font-bold">$ {{$item['pvpVenta']}}</p>
                        <div class="row">
                            <button title="Agregar para cotizar" wire:click="agregar('{{$item['nombreComercial']}}',{{$item['id']}},{{$item['pvpVenta']}})" class="bg-transparent hover:bg-transparent text-center font-bold " style="font-size: 30px; color:rgb(44, 161, 44)">
                                <i class="fa-solid fa-circle-plus"></i>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <br>
    <br>
    @if ($agrcotizar)
        <a href="#" class="btn-flotante">Desliza para ver tu cotización <i class="fa-solid fa-circle-arrow-down"></i> </a>
    @endif
</div>
    




