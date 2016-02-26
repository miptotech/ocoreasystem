<table class="table table-striped">

    <tr>
        <th>#</th>
        <th>Fecha Recibida</th>
        <th>Nombre</th>
        <th>Equipo</th>
        <th>Marca</th>
        <th>Movil</th>
        <th>Categoria</th>
        <th>Estado</th>
        <th></th>
    </tr>
    @foreach ($st as $st)
        <tr data-id="{{$st->id}}">
            <td>{{ $st->id}}</td>
            <td>{{ $st->date_start}}</td>
            <td>{{ $st->var_name}}</td>
            <td>{{ $st->var_typequipment}}</td>
            <td>{{ $st->var_brand}}</td>
            <td>{{ $st->var_mobile}}</td>
            <td>{{ $st->var_category}}</td>
            <td>{{ $st->var_status}}</td>

            <td>
                <a href="{{ route('st.edit',$st->id)}}">Editar</a>
                <a href="#!" class="btn-delete">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>