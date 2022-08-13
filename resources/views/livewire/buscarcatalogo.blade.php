<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
    <div class="bg-transparent overflow-hidden  sm:rounded-lg px-4 py-4">

        <p class="justify-content-center" style="color: rgb(71, 30, 255); font-size:24px"><span style="font-weight: bold">Resultados de la búsqueda:</span><span style="color: rgb(30, 101, 255);"> {{$buscar}}</span></p>
            <div class="container section " id="contenido">
                    <div class="row">
                        @foreach($productsbuscArray as $item)
                        <div class="col s12">
                                <div class="card " style="width: 234px;margin: auto;margin-bottom: 20px;">
                                    <div class="card-image">
                                    <img  src="https://ichef.bbci.co.uk/news/640/cpsprodpb/1DD7/production/_102793670_1.jpg" alt=""  height= "250"width="250" style="">
                                    <span class="card-title">{{$item['nombreComercial']}}</span>
                                    </div>
                                    <div class="card-content">
                                    <p>{{$item['nombreGenerico']}}</p>
                                    <p>{{$item['pvpVenta']}}</p>
                                    </div>
                                </div>
                            
                        </div>
                        @endforeach
                    </div>
            </div>
    </div>
</div>
<hr/>