@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Adicionar Papel</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{ route('papeis.store') }}" method="post">
			
			{{ csrf_field() }}
			@include('admin.papel._form')

			<button class="btn btn-success">Adicionar</button>

			<button class="btn btn-danger">
				<a href="{{ route('papeis.index') }}" style="color: white; text-decoration: none;">Cancelar</a>
			</button>


			</form>

		</div>

	</div>

@endsection
