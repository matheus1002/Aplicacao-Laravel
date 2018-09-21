@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Visualizar Processo</h2>

		@include('admin._caminho')
		
		<div class="row">
			<form action="{{ route('processos.show', $processo->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.processos._formvisualizar')

		

			</form>
			
			<button class="btn btn-success">
				<a href="{{ route('processos.index') }}" style="color: white; text-decoration: none;">Voltar</a>
			</button>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
