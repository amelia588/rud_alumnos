@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1>Lista de Alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary mb-3">Agregar Alumno</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
