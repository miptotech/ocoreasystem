<table class="table table-striped">

    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th></th>
    </tr>
    @foreach ($note as $note)
        <tr data-id="{{$note->id}}">
            <td>{{ $note->id }}</td>
            <td>{{ $note->var_title }}</td>
            <td>{{ $note->var_description }}</td>
            <td>{{ $note->var_status }}</td>
            <td>{{ $note->date_note }}</td>
            <td>
                <a href="{{ route('note.edit', $note->id)}}">Editar</a>
                <a href="#!" class="btn-delete">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>