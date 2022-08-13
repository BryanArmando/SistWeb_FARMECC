@extends('home')

@section('contentmodules')
    @livewire('pedidosproveedores',['tokenok'=> $token])
@endsection