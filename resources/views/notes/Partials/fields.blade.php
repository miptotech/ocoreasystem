
<div class="form-group">
    <label>Titulo</label>
    <input id="var_title" name="var_title" type="text" value="{{ old('var_title') }}" class="form-control">
</div>
<div class="form-group">
    <label>descripcion</label>
    <input id="var_description" name="var_description" type="text" value="{{ old('var_description') }}" class="form-control">
</div>
<div class="form-group">
    <label>Estado</label>
    <select name="var_status" value="{{ old('var_status') }}" class="form-control">
        <option value=""> Seleccione el Estado ... </option>
        <option value="Abierto">Activo</option>
        <option value="Cerrado">Inactivo</option>
    </select>

        <label>{{Auth::user()->id}}</label>

</div>





