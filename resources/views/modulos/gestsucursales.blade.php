
@extends('home')

@section('contentmodules')
    @livewire('gestsucursal',['tokenok'=> $token]) 

@endsection
