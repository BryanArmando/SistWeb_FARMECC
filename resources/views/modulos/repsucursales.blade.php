@extends('home')

@section('contentmodules')
    @livewire('reporte',['tokenok'=> $token])
@endsection