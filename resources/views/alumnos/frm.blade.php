@extends('plantillas/plantilla2')

@section('contenido1')
    @include('alumnos/tablahtml')
@endsection

@section('contenido2')

@if('accion' == 'C')
    <h1>Insertando alumno</h1>
    <form action="{{route("alumnos.store")}}" method="POST">
@elseif('accion'=='E')
    <h1>Editar alumno</h1>
    <form action="{{route("alumnos.update", $alumno->id)}}" method="POST">
@elseif('accion'=='D')
    <h1>Información del Alumno</h1>
    <form action="{{route("alumnos.destroy", $alumno->id)}}" method="post">
@endif
        @csrf
        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{old('id')}}" {{$des}}
                placeholder="ID">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $alumno->nombre)}}" {{$des}}
                placeholder="Nombre">
                @error("nombre")
                    <p>Error en: {{$message}}</p>
                @enderror
        </div>
        <div class="form-group">
            <label for="nombre">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido', $alumno->apellido)}}" {{$des}}
                placeholder="Apellido Paterno">
                @error("apellido")
                    <p>Error en: {{$message}}</p>
                @enderror
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{old('email', $alumno->email)}}" {{$des}}
                placeholder="Ingresa email">
                @error("email")
                    <p>Error en: {{$message}}</p>
                @enderror
            <small id="emailHelp" class="form-text text-muted">Tu email es privado.</small>
        </div>
        <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    </form>
@endsection
