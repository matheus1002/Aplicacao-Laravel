@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Editar Papel</h2>

		@include('admin._caminho')
		<div class="row">
			<form action="{{ route('papeis.update', $registro->id) }}" method="post">
				
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.papel._form')

			<button class="btn btn-success">Atualizar</button>

			<a class="btn btn-danger" href="{{ route('papeis.index') }}">Cancelar</a>

			</form>

		</div>

	</div>
	
@endsection