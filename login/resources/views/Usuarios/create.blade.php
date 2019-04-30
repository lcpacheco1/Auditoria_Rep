@extends('layouts.app')

@section('content')
<div class="container">



<form action="{{url('/Usuarios')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	@include('Usuarios.form', ['Modo'=>'crear'])
	
</form>
</div>
@endsection