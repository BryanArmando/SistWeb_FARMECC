@extends('layouts.app')

@section('content')

<div class="row justify-content-center " style="background:none; margin-top:89px">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="p-2 font-bold">
                    <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                        <span class="inline-flex columna2 text-white rounded-full h-6 px-3 justify-center items-center"><i class="fa-solid fa-circle-info" style="font-size:15px; padding-right:10px"></i>Información</span>
                        <span class="inline-flex p-2">El equipo de desarrolladores son los encargados de la administración de credenciales de ingreso, por favor contáctalos por los medios de tu preferencia.</span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="col-6 px-5" style="background:none">
        <br>
        <div class="card" style="border: none; background:none">

            <div class="card-header columna2 text-white text-center font-bold" style="font-size:25px;border-radius: 25px">
                <i class="fa-solid fa-arrow-rotate-right" style="padding-right:15px"></i>  {{ __('Reseteo de contraseña') }}
                <br> 
                <p class="font-bold" style="font-size: 15px; color:#eeeeee">Contacta con el equipo desarrollador, para resetear tu contraseña/usuario</p>
            </div>

            <div class="card-body columna5 pt-5 mt-3" style="border-radius: 25px">
                

                    <div class="row mb-3">

                        <div class="col-2">
                        </div>
                        <div class="col-8">
                            <a href="mailto:diana.almeida01@epn.edu.ec?Subject=Cambio%20de%20credenciales%20FARMECC" target="_blank"  rel="noopener noreferrer">
                                <button type="submit"  class="  btn btn-lg btn-dark btn-block" style="border-radius: 15px"> <i class="fa-solid fa-envelope-open-text" style="font-size:25px; padding-right:15px"></i>Enviar un correo usando una aplicación de correo para Windows</button>
                            </a>
                            <br>

                           
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2"></div>
                        <div class="col-8">
                                <a  href="https://wa.me/593988548610/?text=Hola%20equipo%20desarrollador%20de%20FARMECC,%20por%20favor%20su%20ayuda%20con%20el%20reseteo%20de%20mis%20credenciales." target="_blank"  rel="noopener noreferrer">
                                    <button type="submit" class="  btn btn-lg btn-dark btn-block" style="border-radius: 15px"> <i class="fa-brands fa-whatsapp" style="font-size:25px; padding-right:15px"></i>Enviar un mensaje por Whatsapp</button>
                                </a>
                        </div>
                        <div class="col-2"></div>
                        
                    </div>

                    

                    <div class="row p-2">
                        <div class="col-2"></div>
                        <div class="col-8">
                           
                        </div>
                        <div class="col-2"></div>
                    </div>
                
            </div>
        </div>
    </div>
    <div class="col-6 mt-3" style="background: none">
        @include('livewire.enviarform')
       
    </div> 
      
</div>

