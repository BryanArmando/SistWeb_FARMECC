<!-- BARRA SUPERIOR PARA LOGIN Y MÓDULOS- -->
<div class="container" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container flex text-left px-4">
        <a class="navbar-nav " href="/">
            <p class="titfarmecc">FARM</p>
            <p class="titfarmecc2">ECC.</p>
        </a>

    </div>
    

</div>

<div class="container text-right" style="justify-content: right;">
@if(session('usern'))
    @include('livewire.logout')
@endif
</div>
