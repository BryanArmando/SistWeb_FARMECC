@extends('home')

@section('contentmodules')
    @livewire('personal',['tokenok'=> $token])
@endsection