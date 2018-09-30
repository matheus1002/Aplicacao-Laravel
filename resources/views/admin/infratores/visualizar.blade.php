@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Visualizar Infrator</h2>

		@include('admin._caminho')
		
		<div class="row">
			<form action="{{ route('infratores.show', $infrator->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.infratores._formvisualizar')

			</form>
			
			<a class="btn btn-success" href="{{ route('infratores.index') }}">Voltar</a>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
