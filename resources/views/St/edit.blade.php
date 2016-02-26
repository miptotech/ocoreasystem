@extends ('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Servicio Num.: # {{$st->id}}</div>
                    <div class="panel-body">

                        @include ('St.partials.messages')

                        <form role="form" method="PUT" action="{{ route('st.update',[$st->id]) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div>
                                <label>Nombre Cliente</label>
                                <select id="cliente" name="int_clientid" value="{{ old('int_clientid',$st->int_clientid) }}" class="form-control" placeholder="Por favor introduzca el Nombre del Cliente">
                                    <option value="0"> Seleccione el Cliente ... </option>
                                    @foreach ($client as $client)
                                        @if($st->int_clientid==$client->id)
                                        <option selected value="{{ $client->id}}"> {{ $client->var_name}}</option>
                                        @else
                                            <option value="{{ $client->id}}"> {{ $client->var_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Movil</label>
                                <input id="var_mobile" name="var_mobile" type="text" value="{{ old('var_mobile',$st->var_mobile) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input id="var_telephone" name="var_telephone" type="text" value="{{ old('var_telephone',$st->var_telephone) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input id="var_email" name="var_email" type="email" value="{{ old('var_email',$st->var_email) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <input id="var_address" name="var_address" type="text" value="{{ old('var_address',$st->var_address) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tipo Equipo</label>
                                <input id="var_typequipment" name="var_typequipment" type="text" value="{{ old('var_typequipment',$st->var_typequipment) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label>
                                <input id="var_model" name="var_model" type="text" value="{{ old('var_model',$st->var_model) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Marca</label>
                                <input id="var_brand" name="var_brand" type="text" value="{{ old('var_brand',$st->var_brand) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Serie</label>
                                <input id="var_serial" name="var_serial" type="text" value="{{ old('var_serial',$st->var_serial) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Accesorios</label>
                                <input id="var_accessory" name="var_accessory" type="text" value="{{ old('var_accessory',$st->var_accessory) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Usuario</label>
                                <input id="var_user" name="var_user" type="text" value="{{ old('var_user',$st->var_user) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Claves</label>
                                <input id="var_key" name="var_key" type="text" value="{{ old('var_key',$st->var_key) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Recibido por</label>
                                <select id="recibido" name="int_userrid" value="{{ old('int_userrid',$st->int_userrid) }}"  class="form-control" placeholder="Por favor introduzca el Usuario">
                                    <option value="0"> Seleccione el Usuario ... </option>
                                    @foreach ($reviceuser as $reviceuser)
                                        @if($st->int_userrid==$reviceuser->id)
                                        <option selected value="{{ $reviceuser->id}}"> {{ $reviceuser->var_username}}</option>
                                        @else
                                            <option value="{{ $reviceuser->id}}"> {{ $reviceuser->var_username}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fecha Entrega</label>
                                <input id="date_start" name="date_start" type="date" value="{{ old('date_start',$st->date_start) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fecha Salida</label>
                                <input id="date_end" name="date_end" type="date" value="{{ old('date_end',$st->date_end) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tecnico Asignado</label>
                                <select id="tecnico" name="int_useraid" value="{{ old('int_useraid',$st->int_useraid) }}" class="form-control" placeholder="Por favor introduzca el Tecnico">
                                    <option value="0"> Seleccione el Tecnico ... </option>
                                    @foreach ($tecniuser as $tecniuser)
                                        @if($st->int_useraid==$tecniuser->id)
                                            <option selected value="{{ $tecniuser->id}}"> {{ $tecniuser->var_username}}</option>
                                        @else
                                            <option value="{{ $tecniuser->id}}"> {{ $tecniuser->var_username}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Falla Reportada</label>
                                <input id="var_flaw" name="var_flaw" type="text" value="{{ old('var_flaw',$st->var_flaw) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Categoria</label>
                                <select id="tecnico" name="int_flawcategoryid" value="{{ old('int_flawcategoryid',$st->int_flawcategoryid) }}" class="form-control" placeholder="Por favor introduzca el Tecnico">
                                    <option value="0"> Seleccione el Tecnico ... </option>
                                    @foreach ($flaw as $flaw)
                                        @if($st->int_flawcategoryid==$flaw->id)
                                            <option selected value="{{ $flaw->id}}"> {{ $flaw->var_category}}</option>
                                        @else
                                            <option value="{{ $flaw->id}}"> {{ $flaw->var_category}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Informe Final</label>
                                <input id="var_inform" name="var_inform" type="text" value="{{ old('var_inform',$st->var_inform) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Adelanto</label>
                                <input id="int_advance" name="int_advance" type="number" value="{{ old('int_advance',$st->int_advance) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Presupuesto</label>
                                <input id="int_replace" name="int_replace" type="number" value="{{ old('int_replace',$st->int_replace) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mano de Obra</label>
                                <input id="int_handwork" name="int_handwork" type="number" value="{{ old('int_handwork',$st->int_handwork) }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input id="int_total" name="int_total" type="number" value="{{ old('int_total') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select name="var_status" value="{{ old('var_status',$st->var_status) }}" class="form-control">
                                    <option value=""> Seleccione el Estado ... </option>
                                    @if($st->var_status=="Abierto")
                                    <option selected value="Abierto">Abierto</option>
                                    @else
                                    <option value="Abierto">Abierto</option>
                                    @endif
                                    @if($st->var_status=="Cerrado")
                                        <option selected value="Cerrado">Cerrado</option>
                                    @else
                                        <option value="Cerrado">Cerrado</option>
                                    @endif
                                    @if($st->var_status=="Esperando Repuesto")
                                        <option selected value="Esperando Repuesto">Esperando Repuesto</option>
                                    @else
                                        <option value="Esperando Repuesto">Esperando Repuesto</option>
                                    @endif
                                </select>
                            </div>
                        <button type="submit" class="btn btn-default">Actualizar Servicio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection