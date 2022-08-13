
<aside class="col-sm-4 ">
<!-- Carrito -->
    <h2 class="columna text-center bg-primary text-white font-bold"  style="border-color: rgb(25, 81, 184); border-width:2px; font-size:25px">Cotizacion</h2>
    <!-- Elementos del carrito -->
    <ul id="carrito" class="list-group"  style="border-color: rgb(25, 81, 184); border-width:2px; border-radius:0px">
        @foreach($nombprodcotizarArray as $item)
            @if($item['id'] == $ident)
                <li class="rounded text-primary font-bold cotiz columna" id="imp1"> 
                    <table>
                        <tr>
                          <td class="text-center columna2 text-white w-full">PRODUCTO</td>
                          <td class="text-center columna2 text-white w-full">PRECIO</td>
                        </tr>
                        <tr>
                          <td class="text-white">
                            @php
                            echo $nombproducto;
                            @endphp
                          </td>
                          <td class="text-white text-center">
                            @php
                            echo $precioproducto;
                            @endphp
                          </td>

                        </tr>
                    </table>         


                    <div class="row m-0  text-center">
                        <div class="col text-center bg-danger text-white columna2">
                            <h6>TOTAL</h6>
                        </div>
                        <div class="col text-center font-bold text-white">
                            <h6>$   {{$suma}}</h6>
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
        
    </ul>


    <button  wire:click="vaciar()" type="button" class=" m-3 p-3 pb-2 px-2 text-center btncata text-white font-bold text-xs rounded waves" >
        <i class="fa-solid fa-trash-can"></i>
        VACIAR
    </button>

    <a class="m-3 p-3 pb-2 px-2 text-center btncata text-white rounded font-bold text-xs" href="javascript:window.print()">
        <i class="fa-solid fa-hand-pointer"></i>
        IMPRIMIR
    </a>

</aside>
