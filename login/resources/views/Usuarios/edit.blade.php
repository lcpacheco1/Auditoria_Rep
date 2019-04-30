@extends('layouts.app')

@section('content')
<div class="container">



<form action="{{ url('/Usuarios/'. $usuario->id) }}" method="post" enctype="multipart/form-data">

	{{csrf_field()}}
	{{method_field('PATCH') }}

	@include('Usuarios.form', ['Modo'=>'editar'])
	
	
	{{-- <input type="submit" value="Modificar">

	<a href="{{ url('Usuarios') }}">Regresar</a> --}}

</form>
</div>
@endsection