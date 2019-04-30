<form action="{{ url('/Usuarios/'. $usuario->id) }}" method="post" enctype="multipart/form-data">

	{{csrf_field()}}
	{{method_field('PATCH') }}
	
	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{$usuario->Nombre}}">
	<br>	
	<label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
	<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$usuario->ApellidoPaterno}}">
	<br>	
	<label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
	<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$usuario->ApellidoMaterno}}">
	<br>	
	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{$usuario->Correo}}">

	<br>
	<input type="submit" value="Editar">

</form>
