Inicio (Despliegue de datos)

<table class="table table-light">

	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
	@foreach($Usuarios as $usuario)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$usuario->Nombre}}</td>
			<td>{{$usuario->ApellidoPaterno}}</td>
			<td>{{$usuario->ApellidoMaterno}}</td>
			<td>{{$usuario->Correo}}</td>
			<td>

			<a href="{{url('/Usuarios/'.$usuario->id.'/edit') }}">
				
				Editar

			</a>

			 | 

			<form method="post" action="{{url('/
			Usuarios/'.$usuario->id) }}">
				
				{{csrf_field() }}
				{{method_field('DELETE') }}
				<button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

			</form>

			</td>
		</tr>
	@endforeach
	</tbody>
	
</table>