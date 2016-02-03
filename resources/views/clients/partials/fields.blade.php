<div class="form-group">
    <label>Nombre Cliente</label>
    <input name ="var_name" type="text" value="{{ old($client->var_name) }}" class="form-control" placeholder="Por favor introduzca el Nombre del Cliente">
</div>
<div class="form-group">
    <label>Correo Electrónico</label>
    <input name="var_email" type="email" value="{{ old('var_email') }}" class="form-control" placeholder="Example@mail.com">
</div>
<div class="form-group">
    <label>Dirección</label>
    <input name="var_address" type="text" value="{{ old('var_address') }}" class="form-control">
</div>
<div class="form-group">
    <label>Telefono</label>
    <input name="var_telephone" type="text" value="{{ old('var_telephone') }}" class="form-control">
</div>
<div class="form-group">
    <label>Celular</label>
    <input name="var_mobile" type="text" value="{{ old('var_mobile') }}" class="form-control">
</div>
