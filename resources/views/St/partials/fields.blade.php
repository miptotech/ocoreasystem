<div class="form-group">
    <label>Nombre Cliente</label>
    <select id="cliente" name="var_name" value="{{ old('var_name') }}" class="form-control" placeholder="Por favor introduzca el Nombre del Cliente">
        <option value="0"> Seleccione el Cliente ... </option>
        @foreach ($client as $client)
                <option value="{{ $client->id}}"> {{ $client->var_name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Movil</label>
    <input  id="var_mobile" name="var_mobile" type="text" value="{{ old('var_mobile') }}" class="form-control"  >
</div>
<div class="form-group">
    <label>Telefono</label>
    <input id="var_telephone" name="var_telephone" type="text" value="{{ old('var_telephone') }}" class="form-control">
</div>
<div class="form-group">
    <label>Correo</label>
    <input id="var_email" name="var_email" type="email" value="{{ old('var_email') }}" class="form-control" placeholder="Example@mail.com">
</div>
<div class="form-group">
    <label>Direccion</label>
    <input id="var_address" name="var_address" type="text" value="{{ old('var_address') }}" class="form-control">
</div>
<div class="form-group">
    <label>Localidad</label>
    <input id="var_located" name="var_located" type="text" value="{{ old('var_located') }}" class="form-control">
</div>
<div class="form-group">
<label>Tipo de Equipo</label>
<input name="var_typequipment" type="text" value="{{ old('var_typequipment') }}" class="form-control">
</div>
<div class="form-group">
<label>Modelo</label>
<input name="var_model" type="text" value="{{ old('var_model') }}" class="form-control">
</div>
<div class="form-group">
<label>Marca</label>
<input name="var_brand" type="text" value="{{ old('var_brand') }}" class="form-control">
</div>
<div class="form-group">
<label>Serie</label>
<input name="var_serial" type="text" value="{{ old('var_serial') }}" class="form-control">
</div>
<div class="form-group">
<label>Accesorios</label>
<input name="var_accessory" type="text" value="{{ old('var_accessory') }}" class="form-control">
</div>
<div class="form-group">
<label>Usuario</label>
<input name="var_user" type="text" value="{{ old('var_user') }}" class="form-control">
</div>
<div class="form-group">
<label>Claves</label>
<input name="var_key" type="text" value="{{ old('var_key') }}" class="form-control">
</div>
<div class="form-group">
<label>Ubicacion Taller</label>
<input name="var_workshopaddr" type="text" value="{{ old('var_workshopaddr') }}" class="form-control">
</div>
<div class="form-group">
<label>Fecha entrada</label>
<input name="date_start" type="date" value="{{ old('date_start') }}" class="form-control datepicker">
</div>
<div class="form-group">
<label>falla reportada</label>
<input name="var_flaw" type="text" value="{{ old('var_flaw') }}" class="form-control">
</div>
<div class="form-group">
    <label>Informe Final</label>
    <input name="var_inform" type="text" value="{{ old('var_inform') }}" class="form-control">
</div>
<div class="form-group">
    <label>Adelantado</label>
    <input name="int_advance" type="text" value="{{ old('int_advance') }}" class="form-control">
</div>
<div class="form-group">
    <label>Repuesto</label>
    <input name="int_replace" type="text" value="{{ old('int_replace') }}" class="form-control">
</div>
<div class="form-group">
    <label>Mano de Obra</label>
    <input name="int_handwork" type="text" value="{{ old('int_handwork') }}" class="form-control">
</div>
