<div>
    <div class="row justify-content-center bg-transparent">
        <div class="col-6 p-5">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="card" style="border: none; background:none">

                <div class="card-header columna2 text-white text-center font-bold" style="font-size:25px;border-radius: 25px"><i class="fa-solid fa-user-shield"></i>  {{ __('INICIO DE SESIÓN') }}</div>

                <div class="card-body columna5 pt-5 mt-3" style="border-radius: 25px">
                    <form>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <label  class="col-form-label text-left font-bold text-white" style="font-size: 20px"><i class="fa-solid fa-child-reaching"></i>  {{ __('Usuario') }}</label>
                                <div class="form-group">
                                    <input type="text" wire:model="username" class="form-control bg-white text-primary" style="border: none; border-radius:25px;font-size: 20px">
                                    @error('username') <span class="text-white error">El usuario ingresado no es correcto</span>@enderror
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <label  class="col-form-label text-md-start font-bold text-white" style="font-size: 20px"><i class="fa-solid fa-key"></i> {{ __('Contraseña') }}</label>

                                    <div class="form-group">
                                        <input type="password" wire:model="password" class="form-control bg-white text-primary" style="border: none; border-radius:25px;font-size: 20px">
                                        @error('password') <span class="text-white error">La contraseña ingresada no es correcta</span>@enderror
                                    </div>

                            </div>
                            <div class="col-2"></div>
                            
                        </div>

                        

                        <div class="row p-2">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <button class="btnaceptarh btn text-white columna" style="border-width: 2px; border-color:white" wire:click.prevent="login">Aceptar</button>
                                @if($password)
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-3">
                        <div class="p-2 font-bold">
                            <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                                <span class="inline-flex columna2 text-white rounded-full h-6 p-3 justify-center items-center"><i class="fa-solid fa-circle-exclamation" style="font-size: 25px; padding-right:15px"></i>Advertencia</span>
                                <span class="inline-flex p-2">¿Eres administrador? Aquí debes ingresar las credenciales proporcionadas por los desarrolladores.</span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <img class="imgserv" src="{{asset('slides/userpage 1.png')}}" style="width: 100%; height:auto; background:none">
        </div>   
    </div>
</div>
