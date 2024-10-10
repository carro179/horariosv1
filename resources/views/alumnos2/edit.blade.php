@extends('plantillas/plantilla2')

@section('contenido1')
    @include('alumnos2/tablahtml')
@endsection

@section('contenido2')
<h1>Editando</h1>
    <form action="{{route("alumnos.update", $alumno->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value='{{$alumno->nombre}}'
                placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value='{{$alumno->apellido}}'
                placeholder="Apellido Paterno">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value='{{$alumno->email}}'
                placeholder="Ingresa email">
            <small id="emailHelp" class="form-text text-muted">Tu email es privado.</small>
        </div>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
@endsection
