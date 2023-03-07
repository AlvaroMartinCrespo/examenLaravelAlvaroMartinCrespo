@extends('plantilla/plantilla')

@section('title', 'Alumnos')

@section('content')

    <h1>Modulo {{ $idModulo }}</h1>

    <h2>Alumnos en el Módulo</h2>

    @foreach ($alumnos as $alumno)
        <span><strong>Nombre:</strong> {{ $alumno->nombre }}</span>
        <br>
        <span><strong>Apellidos:</strong> {{ $alumno->apellidos }}</span>
        <br>
        <span><strong>Email:</strong> {{ $alumno->email }}</span>
        <br>
        <a href="{{ route('eliminarAlumno', ['id' => $alumno->id]) }}">Eliminar</a>
        <br><br>
    @endforeach

    <h2>Añadir Alumno al Módulo</h2>
    <form action="{{ route('guardarAlumno', ['idModulo' => $idModulo]) }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <button type="submit">Enviar</button>
    </form>

    <br><br>

    <a href="{{ route('inicio') }}">Volver</a>

@endsection
