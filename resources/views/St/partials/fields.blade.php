<div class="form-group">
    <label>Nombre Cliente</label>
    <select id="cliente" name="int_clientid" value="{{ old('int_clientid') }}" class="form-control" placeholder="Por favor introduzca el Nombre del Cliente">
        <option value="0"> Seleccione el Cliente ... </option>
        @foreach ($client as $client)
                <option value="{{ $client->id}}"> {{ $client->var_name}}</option>
        @endforeach
    </select>
    <br>
    <a class="btn btn-info" href="{{ route('client.create') }}" role="button">
        Crear cliente
    </a>
</div>
<div class="form-group">
    <label>Movil</label>
    <input id="var_mobile" name="var_mobile" type="text" value="{{ old('var_mobile') }}" class="form-control">
</div>
<div class="form-group">
    <label>Telefono</label>
    <input id="var_telephone" name="var_telephone" type="text" value="{{ old('var_telephone') }}" class="form-control">
</div>
<div class="form-group">
    <label>Correo Electrónico</label>
    <input id="var_email" name="var_email" type="email" value="{{ old('var_email') }}" class="form-control">
</div>
<div class="form-group">
    <label>Direccion</label>
    <input id="var_address" name="var_address" type="text" value="{{ old('var_address') }}" class="form-control">
</div>
<div class="form-group">
    <label>Tipo Equipo</label>
    <input id="var_typequipment" name="var_typequipment" type="text" value="{{ old('var_typequipment') }}" class="form-control">
</div>
<div class="form-group">
    <label>Modelo</label>
    <input id="var_model" name="var_model" type="text" value="{{ old('var_model') }}" class="form-control">
</div>
<div class="form-group">
    <label>Marca</label>
    <input id="var_brand" name="var_brand" type="text" value="{{ old('var_brand') }}" class="form-control">
</div>
<div class="form-group">
    <label>Serie</label>
    <input id="var_serial" name="var_serial" type="text" value="{{ old('var_serial') }}" class="form-control">
</div>
<div class="form-group">
    <label>Accesorios</label>
    <input id="var_accessory" name="var_accessory" type="text" value="{{ old('var_accessory') }}" class="form-control">
</div>
<div class="form-group">
    <label>Usuario</label>
    <input id="var_user" name="var_user" type="text" value="{{ old('var_user') }}" class="form-control">
</div>
<div class="form-group">
    <label>Claves</label>
    <input id="var_key" name="var_key" type="text" value="{{ old('var_key') }}" class="form-control">
</div>
<div class="form-group">
    <label>Recibido por</label>
    <select id="recibido" name="int_userrid" value="{{ old('int_userrid') }}"  class="form-control" placeholder="Por favor introduzca el Usuario">
        <option value="0"> Seleccione el Usuario ... </option>
        @foreach ($reviceuser as $reviceuser)
            <option value="{{ $reviceuser->id}}"> {{ $reviceuser->var_username}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Fecha Entrega</label>
    <input id="date_start" name="date_start" type="date" value="{{ old('date_start') }}" class="form-control">
</div>
<div class="form-group">
    <label>Fecha Salida</label>
    <input id="date_end" name="date_end" type="date" value="{{ old('date_end') }}" class="form-control">
</div>
<div class="form-group">
    <label>Tecnico Asignado</label>
    <select id="tecnico" name="int_useraid" value="{{ old('int_useraid') }}" class="form-control" placeholder="Por favor introduzca el Tecnico">
        <option value="0"> Seleccione el Tecnico ... </option>
        @foreach ($tecniuser as $tecniuser)
            <option value="{{ $tecniuser->id}}"> {{ $tecniuser->var_username}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Falla Reportada</label>
    <input id="var_flaw" name="var_flaw" type="text" value="{{ old('var_flaw') }}" class="form-control">
</div>
<div class="form-group">
    <label>Categoria</label>
    <select id="tecnico" name="int_flawcategoryid" value="{{ old('int_flawcategoryid') }}" class="form-control" placeholder="Por favor introduzca el Tecnico">
        <option value="0"> Seleccione el Tecnico ... </option>
        @foreach ($flaw as $flaw)
            <option value="{{ $flaw->id}}"> {{ $flaw->var_category}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Informe Final</label>
    <input id="var_inform" name="var_inform" type="text" value="{{ old('var_inform') }}" class="form-control">
</div>
<div class="form-group">
    <label>Adelanto</label>
    <input id="int_advance" name="int_advance" type="number" value="{{ old('int_advance') }}" class="form-control">
</div>
<div class="form-group">
    <label>Presupuesto</label>
    <input id="int_replace" name="int_replace" type="number" value="{{ old('int_replace') }}" class="form-control">
</div>
<div class="form-group">
    <label>Mano de Obra</label>
    <input id="int_handwork" name="int_handwork" type="number" value="{{ old('int_handwork') }}" class="form-control">
</div>
<div class="form-group">
    <label>Total</label>
    <input id="int_total" name="int_total" type="number" value="{{ old('int_total') }}" class="form-control">
</div>
<div class="form-group">
    <label>Estado</label>
    <select name="var_status" value="{{ old('var_status') }}" class="form-control">
        <option value=""> Seleccione el Estado ... </option>
            <option value="Abierto">Abierto</option>
            <option value="Cerrado">Cerrado</option>
            <option value="Esperando Repuesto">Esperando Repuesto</option>
    </select>
</div>

