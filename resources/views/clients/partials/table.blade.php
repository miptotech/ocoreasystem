<table class="table table-striped">

    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Celular</th>
        <th></th>
    </tr>
    @foreach ($clients as $clients)
        <tr data-id="{{$clients->id}}">
            <td>{{ $clients->id }}</td>
            <td>{{ $clients->var_name }}</td>
            <td>{{ $clients->var_telephone }}</td>
            <td>{{ $clients->var_address }}</td>
            <td>{{ $clients->var_mobile }}</td>
            <td>
                <a href="{{ route('client.edit', $clients->id)}}">Editar</a>
                <a href="#!" class="btn-delete">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>