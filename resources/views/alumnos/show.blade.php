@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1>Detalles del Alumno</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $alumno->nombre }} {{ $alumno->apellido }}</h5>
                <p class="card-text"><strong>Edad:</strong> {{ $alumno->edad }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $alumno->email }}</p>
                <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection
