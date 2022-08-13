
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Farmacias FARMECC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            html, body 
            { 
            height: 100%;
            overflow-x: hidden;
            scrollbar-width: thin ;
            scrollbar-color: rgb(32, 70, 192) rgba(235, 34, 201, 0.253);
            }

        </style>
        
        @livewireStyles
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcomestyles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menulateral.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- ICONO -->
        <link rel="icon" href="{{ asset('slides/farmecclogo.ico') }}">
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,1,0" />    

        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <script src="https://kit.fontawesome.com/40c6c5354e.js" crossorigin="anonymous"></script>
  

    </head>
    <body style="font-family: 'Nunito', sans-serif;">
        <div>
            <!-- BARRA LATERAL !-->
            <div id="sidemenu" class="menu-collapsed" style="padding-top:89px">
                <div id="header">
                    <div id="menu-btn">
                        <div class="btn-hamburguer">  </div>
                        <div class="btn-hamburguer">  </div>
                        <div class="btn-hamburguer">  </div>
                    </div>
                </div>
                <div id="profile">
                    <div id="photo">
                        <img class="p-1" src="{{asset('slides/user.jpg')}} " width="200px" height="200px" >
                    </div>
                    <div id="name">
                        @if($usuarioingresado)
                            <span style="font-size: 15px;">{{$usuarioingresado}}</span><br>
                        @endif  
                        <span style="font-size: 20px">Farmacias FARMECC</span>
                    </div>
                </div>
                
                
                <div id="menu-item">
                    <div class="item">
                        <a id="opc" title="Gestión de Sucursales" tooltip-dir="right" class="tbtn title d-block text-light " aria-describedby="tooltip" data-tooltip-text="Gestión de sucursales"  href="{{ route('gestsucursales') }}" ><i class="fa-solid fa-shop" style="font-size: 24px;padding-left:10px"></i>  <span  style="padding-left:10px">Gestión de sucursales</span></a>       
                        <a id="opc" title="Stock de Productos" tooltip-dir="right"  class="tbtn1 title d-block text-light " aria-describedby="tooltip1" data-tooltip-text="Stock de Productos" href="{{ route('productos') }}"><i class="fa-solid fa-box-open" style="font-size: 24px;padding-left:10px"></i> <span  style="padding-left:10px">Stock de Productos</span></a>
                        <a id="opc" title="Reportes de sucursales" tooltip-dir="right"  class="tbtn2 title d-block text-light " aria-describedby="tooltip2" data-tooltip-text="Reportes de sucursales" href="{{ route('repsucursales') }}"><i class="fa-solid fa-file-pdf" style="font-size: 27px;padding-left:12px"></i>  <span  style="padding-left:13px">Reportes de sucursales</span></a>
                        <a id="opc" title="Ventas" tooltip-dir="right"  class="tbtn4 title d-block text-light " aria-describedby="tooltip4" data-tooltip-text="Ventas" href="{{ route('ventas') }}"><i class="fa-solid fa-sack-dollar" style="font-size: 27px;padding-left:12px"></i>  <span  style="padding-left:13px">Ventas</span></a>
                        <a id="opc" title="Pedidos a proveedores" tooltip-dir="right"  class="tbtn5 title d-block text-light " aria-describedby="tooltip5" data-tooltip-text="Pedidos a proveedores" href="{{ route('pedidos') }}"><i class="fa-solid fa-people-carry-box" style="font-size: 24px;padding-left:10px"></i>  <span  style="padding-left:10px">Pedidos a proveedores</span></a>
                        <a id="opc" title="Personal" tooltip-dir="right"  class="tbtn6 title d-block text-light " aria-describedby="tooltip6" data-tooltip-text="Personal" href="{{ route('personal') }}"><i class="fa-solid fa-people-group" style="font-size: 24px;padding-left:10px"></i>  <span  style="padding-left:10px">Personal</span></a>
                        <a id="opc" title="Ver todos los módulos" tooltip-dir="right"  class="tbtn7 title d-block text-light " aria-describedby="tooltip7" data-tooltip-text="Ver todos los módulos" href="{{ route('homeini') }}"><i class="fa-solid fa-book-open" style="font-size: 24px;padding-left:10px"></i>  <span  style="padding-left:10px">Ver todos los módulos</span></a>
                    </div>
                    
                    <div class="separator"> </div>
                </div> 
            </div>
            <div id="sidemenu">
            
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip" role="tooltip" style="margin-top:230px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip1" role="tooltip1" style="margin-top:280px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip2" role="tooltip2" style="margin-top:320px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip4" role="tooltip4" style="margin-top:370px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip5" role="tooltip5" style="margin-top:410px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip6" role="tooltip6" style="margin-top:460px; margin-left:50px"></div>
                <div class="text-sm bg-dark text-white p-3 font-bold fixed rounded-full  hidden" id="tooltip7" role="tooltip7" style="margin-top:510px; margin-left:50px"></div>
            </div>

            <div class="main-container">
                <div class="row">
                    <nav class=" navbar navbar-expand " role="navigation">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse pt-3" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <a class="tit navbar-nav me-auto text-left px-4" href="{{ route('inicio') }}" >
                                    <p class="titfarmecc">FARM</p>
                                    <p class="titfarmecc2">ECC.</p>
                                </a>
        
                                
                                <!-- Right Side Of Navbar -->
                                <ul class="navtit navbar-nav ">
                                    
                                    <!-- Authentication Links -->
                                    @if ($usuarioingresado)
                                        <!--div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"-->
                                        <li class="nav-item">
                                                <a class="navinis nav-link text-sm font-bold dark:text-gray-500 "  href="{{ url('/') }}">Cerrar Sesión</a>
                                        </li>
                                    @endif
                                    @if (!$usuarioingresado)
                                        <li class="nav-item ">
                                            <a  class="navinis nav-link text-sm font-bold " href="{{ route('login') }}" >
                                                Iniciar Sesión
                                            </a>
                                        </li>   
                                    @endif
                                </ul>
                            </div>
            
                        </div>
                    </nav>
                </div>
                @yield('contentmodules')
                
            
            </div>

            
            
            <!-- PIE --> 
            <div class="content-fluid foot mb-0" >
                <p style="margin-left:50px">Farmacias FARMECC 2022 <br> <br>© Creado por Diana Almeida </p>
            </div>
        </div>
        


        
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <script src="{{asset('js/estilos.js')}}"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.datepicker');
                M.Datepicker.init(elems, {
                    format:'yyyy-mm-dd',
                    showClearBtn:true,
                });
            });

        </script>
        <script>
            /*Script para expandir y colapsar menu lateral*/ 
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e =>{
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");

                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>
        <script>
            /*Script para texto flotante de opciones de menu lateral*/
            document.addEventListener('DOMContentLoaded', function () {
            let figure = document.getElementById('opc');

            directions.addEventListener('change', function () {
                figure.setAttribute('tooltip-dir', this.value);
            });
            });
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn');
                const tooltip = document.querySelector('#tooltip');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn1');
                const tooltip = document.querySelector('#tooltip1');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn2');
                const tooltip = document.querySelector('#tooltip2');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn3');
                const tooltip = document.querySelector('#tooltip3');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn4');
                const tooltip = document.querySelector('#tooltip4');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn5');
                const tooltip = document.querySelector('#tooltip5');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn6');
                const tooltip = document.querySelector('#tooltip6');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
        <script>

            window.addEventListener('DOMContentLoaded', () =>{
                const btn = document.querySelector('.tbtn7');
                const tooltip = document.querySelector('#tooltip7');

                tooltip.innerHTML = btn.dataset.tooltipText

                btn.addEventListener('mouseenter', () => {
                    tooltip.classList.remove('hidden');
                })
                
                btn.addEventListener('mouseleave', () => {
                    tooltip.classList.add('hidden');
                })

            })
        </script>
    </body>
</html>






