@extends('plantillas/plantilla2')

@section('contenido1')
    @include('alumnos2/tablahtml')
@endsection

@section('contenido2')
    <form action="{{route("alumnos.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" id="id" name="id"
                placeholder="ID">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
                placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido" name="apellido"
                placeholder="Apellido Paterno">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                placeholder="Ingresa email">
            <small id="emailHelp" class="form-text text-muted">Tu email es privado.</small>
        </div>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
@endsection
