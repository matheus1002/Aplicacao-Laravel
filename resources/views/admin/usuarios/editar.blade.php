@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Editar Usuário</h2>

		@include('admin._caminho')
		
		<div class="row">
			<form action="{{ route('usuarios.update', $usuarios->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.usuarios._formeditar')

			<button class="btn btn-success">Atualizar</button>

			<button class="btn btn-danger">
				<a href="{{ route('usuarios.index') }}" style="color: white; text-decoration: none;">Cancelar</a>
			</button>


			</form>

		</div>

	</div>

@endsection
