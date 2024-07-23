@csrf
<tr>
    <th>Apellido</th>
    <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}"></td>
</tr>
<tr>
    <th>Nombre</th>
    <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}"></td>
</tr>
<tr>
    <th>Dirección</th>
    <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}"></td>
</tr>
<tr>
    <th>Fecha de nacimiento</th>
    <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac',$persona->dPerFecNac) }}"></td>
</tr>
<tr>
    <th>Edad</th>
    <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad',$persona->nPerEdad) }}"></td>
</tr>
<tr>
    <th>Sueldo</th>
    <td><input type="text" name="nPerSueldo" value="{{ old('nPerSueldo',$persona->nPerSueldo) }}"></td>
</tr>
<tr>
    <th>Rnd</th>
    <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd',$persona->cPerRnd) }}"></td>
</tr>
<tr>
    <th>Estado de Persona</th>
    <td>
        <select name="nPerEstado">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><button>{{$btnText}}</button></td>
</tr>
