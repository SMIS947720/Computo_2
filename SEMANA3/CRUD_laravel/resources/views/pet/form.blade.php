Nombre:
<input type="text" name="nombre" id="nombre" value="{{ isset($pet->nombre)?$pet->nombre:'' }}" />
Color:
<input type="text" name="color" id="color" value="{{ isset($pet->color)?$pet->color:'' }}" />
<button type="submit">Save</button>
