
@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('Mensaje')) {{

	Session::get('Mensaje')

}}
@endif


<a href="{{ url('Usuarios/create') }}" class="btn btn-success">Agregar Usuario</a>
<br>
<br>


<table class="table table-light table-hover">

	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
	@foreach($Usuarios as $usuario)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$usuario->Nombre}} {{$usuario->ApellidoPaterno}} {{$usuario->ApellidoMaterno}}</td>
			<td>{{$usuario->Correo}}</td>
			<td>

			<a class="btn btn-warning" href="{{url('/Usuarios/'.$usuario->id.'/edit') }}">
				
				Editar

			</a>

			 | 

			<form method="post" action="{{url('/
			Usuarios/'.$usuario->id) }}" style="display: inline">
				
				{{csrf_field() }}
				{{method_field('DELETE') }}
				<button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

			</form>

			</td>
		</tr>
	@endforeach
	</tbody>
	
</table>
</div>
@endsection