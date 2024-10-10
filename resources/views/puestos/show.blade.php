@extends('plantillas/plantilla2')

@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
    <form action="{{route("puestos.destroy", $puesto)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="ID">ID</label>
            <input type="text" class="form-control" id="idPuesto" name="idPuesto"
                placeholder="ID">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value='{{$puesto->nombre}}'
                placeholder="Nombre" disabled>
        </div>
        <div class="form-group">
            <label for="nombre">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value='{{$puesto->tipo}}'
                placeholder="Tipo" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Confirmar eliminación</button>
        <a href="{{route('puestos.index')}}" class="btn btn-primary">Regresar</a>
    </form>
@endsection
