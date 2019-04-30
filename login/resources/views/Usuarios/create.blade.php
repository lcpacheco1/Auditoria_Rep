Sección para crear usuarios
<form action="{{url('/Usuarios')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="">
	<br>	
	<label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
	<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">
	<br>	
	<label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
	<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">
	<br>	
	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="">

	<br>	
	<input type="submit" value="Agregar">

</form>