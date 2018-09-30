@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Editar Infrator</h2>

		@include('admin._caminho')
		
		<div class="row">
			<form action="{{ route('infratores.update', $infrator->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.infratores._formeditar')

			<button class="btn btn-success">Atualizar</button>

			<a class="btn btn-danger" href="{{ route('infratores.index') }}">Cancelar</a>

			</form>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
