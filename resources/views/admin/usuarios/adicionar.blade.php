@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Adicionar Usuário</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{ route('usuarios.store') }}" method="post">
			
			{{ csrf_field() }}

			@include('admin.usuarios._form')

			<button class="btn btn-success">Adicionar</button>

			</form>

		</div>

	</div>

@endsection
