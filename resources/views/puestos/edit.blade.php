@extends('plantillas/plantilla2')

@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
<h1>Editando</h1>
<form action="{{route("puestos.update", $puesto)}}" method="post">
    @csrf
    <div class="form-group">
        <label for="ID">ID</label>
        <input type="text" class="form-control" id="idPuesto" name="idPuesto" value='{{$puesto->id}}'
            placeholder="ID">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value='{{$puesto->nombre}}'
            placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="nombre">Tipo</label>
        <input type="text" class="form-control" id="tipo" name="tipo" value='{{$puesto->tipo}}'
            placeholder="Tipo">
    </div>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </form>
@endsection
