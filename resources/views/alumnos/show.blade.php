@extends('plantillas/plantilla2')

@section('contenido1')
    @include('alumnos/tablahtml')
@endsection

@section('contenido2')
    <form action="{{route("alumnos.destroy", $alumno)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value='{{$alumno->nombre}}'
                placeholder="Nombre" disabled>
        </div>
        <div class="form-group">
            <label for="nombre">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value='{{$alumno->apellido}}'
                placeholder="Apellido Paterno" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value='{{$alumno->email}}'
                placeholder="Ingresa email" disabled>
            <small id="emailHelp" class="form-text text-muted">Tu email es privado.</small>
        </div>
        <button type="submit" class="btn btn-primary">Confirmar eliminación</button>
        <a href="{{route('alumnos.index')}}" class="btn btn-primary">Regresar</a>
    </form>
@endsection
