@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario: {{$client->var_name}}</div>
                    <div class="panel-body">

                        @include ('clients.partials.messages')

                        <form role="form" method="PUT" action="{{ route('client.update',[$client->id]) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Nombre Cliente</label>
                                <input name ="var_name" type="text" value="{{ old('var_name',$client->var_name) }}" class="form-control" placeholder="Por favor introduzca el Nombre del Cliente">
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input name="var_email" type="email" value="{{ old('var_email',$client->var_email) }}" class="form-control" placeholder="Example@mail.com">
                            </div>
                            <div class="form-group">
                                <label>Dirección</label>
                                <input name="var_address" type="text" value="{{ old('var_address',$client->var_address) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input name="var_telephone" type="text" value="{{ old('var_telephone',$client->var_telephone) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Celular</label>
                                <input name="var_mobile" type="text" value="{{ old('var_mobile',$client->var_mobile) }}" class="form-control">
                            </div>
                        <button type="submit" class="btn btn-default">Actualizar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection