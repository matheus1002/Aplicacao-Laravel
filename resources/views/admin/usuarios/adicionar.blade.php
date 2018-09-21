@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Adicionar Usuário</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{ route('usuarios.store') }}" method="post">
			
			{{ csrf_field() }}

			@include('admin.usuarios._formadicionar')

			<button class="btn btn-success">Adicionar</button>
			
			<button class="btn btn-danger">
				<a href="{{ route('usuarios.index') }}" style="color: white; text-decoration: none;">Cancelar</a>
			</button>

			</form>

			

		</div>

	</div>

@endsection
