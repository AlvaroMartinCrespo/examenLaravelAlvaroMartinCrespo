@extends('plantilla/plantilla')

@section('title', 'Modulos')

@section('content')

    <h1>Modulos</h1>

    @foreach ($modulos as $modulo)
        <a href="{{ route('listarModuloAlumnos', ['id' => $modulo->id]) }}">{{ $modulo->nombre }}</a>
        <br>
        <br>
    @endforeach


@endsection
