	

	{{ $Modo=='crear' ? 'Agregar Usuario':'Modificar usuario' }}

	
	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" 
	value="{{ isset($Usuarios->Nombre)?$usuario->Nombre:'' }}">
	<br>	
	<label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
	<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($Usuarios->ApellidoPaterno)?$usuario->ApellidoPaterno:'' }}">
	<br>

	<label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
	<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($Usuarios->ApellidoMaterno)?$usuario->ApellidoMaterno:'' }}">
	<br>	

	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{ isset($Usuarios->Correo)?$usuario->Correo:'' }}">

	<br>	

	<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">

	<a href="{{ url('Usuarios') }}">Regresar</a>
