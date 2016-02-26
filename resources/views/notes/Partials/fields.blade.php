
<div class="form-group">
    <label>Titulo</label>
    <input id="var_title" name="var_title" type="text" value="{{ old('var_title') }}" class="form-control" placeholder="Por favor introduzca el Titulo">
</div>
<div class="form-group">
    <label>descripcion</label>
    <input id="var_description" name="var_description" type="text" value="{{ old('var_description') }}" class="form-control">
</div>
<div class="form-group">
    <label>Estado</label>
    <select name="var_status" value="{{ old('var_status') }}" class="form-control">
        <option value=""> Seleccione el Estado ... </option>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

</div>





