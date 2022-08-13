@extends('home')

@section('contentmodules')
    @livewire('visualventas',['tokenok'=> $token])
@endsection