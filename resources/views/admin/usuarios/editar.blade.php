@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Editar Usuário</h2>

		@include('admin._caminho')
		<div class="row">
			<form action="{{ route('usuarios.update', $usuarios->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.usuarios._form')

			<button class="btn btn-primary">Atualizar</button>

			</form>

		</div>

	</div>

@endsection
