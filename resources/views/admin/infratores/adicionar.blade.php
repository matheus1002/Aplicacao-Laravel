@extends('layouts.app') 
 
@section('content')
	<div class="container">
		<h2 align="center">Adicionar Infrator</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{ route('infratores.store') }}" method="post">
			
			{{ csrf_field() }}

			@include('admin.infratores._formadicionar')

			<button class="btn btn-success">Adicionar</button>
			
			<a class="btn btn-danger" href="{{ route('infratores.index') }}">Cancelar</a>

			</form>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
