
<a href="{{ route('puestos.create') }}" class="btn button btn-primary">Insertar</a>
    <div class="table-responsive-md">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($puestos as $puesto)
                    <tr class="">
                        <td scope="row">{{ $puesto->idPuesto }}</td>
                        <td>{{ $puesto->nombre }}</td>
                        <td>{{ $puesto->tipo }}</td>
                        <td><a href="{{ route('puestos.edit', $puesto->idPuesto) }}" class="btn button btn-primary">Editar</a></td>
                        <td><a href="{{ route('puestos.show', $puesto->idPuesto) }}" class="btn button btn-primary">Eliminar</a></td>
                        <td><a href="{{ route('puestos.show', $puesto->idPuesto) }}" class="btn button btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$puestos->links()}}
    </div>