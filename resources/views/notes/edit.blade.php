@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Nota Num.: # {{$note->id}}</div>
                    <div class="panel-body">

                        @include ('notes.partials.messages')

                        <form role="form" method="PUT" action="{{ route('note.update',[$note->id]) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input name ="var_title" type="text" value="{{ old('var_name',$note->var_title) }}" class="form-control" placeholder="Por favor introduzca el Titulo">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input name="var_description" type="text" value="{{ old('var_email',$note->var_description) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select name="var_status" value="{{ old('var_status',$note->var_status) }}" class="form-control">
                                    <option value=""> Seleccione el Estado ... </option>
                                    @if($note->var_status=="Activo")
                                        <option selected value="Activo">Activo</option>
                                    @else
                                        <option value="Activo">Activo</option>
                                    @endif
                                    @if($note->var_status=="Inactivo")
                                        <option selected value="Inactivo">Inactivo</option>
                                    @else
                                        <option value="Inactivo">Inactivo</option>
                                    @endif
                                </select>
                            </div>
                        <button type="submit" class="btn btn-default">Actualizar Nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection