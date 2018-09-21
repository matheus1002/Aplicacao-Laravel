@extends('layouts.app') 

@section('content')
	<div class="container">
		<h2 align="center">Editar Processo</h2>

		@include('admin._caminho')
		
		<div class="row">
			<form action="{{ route('processos.update', $processos->id) }}" method="post">
			
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			@include('admin.processos._formeditar')

			<button class="btn btn-success">Atualizar</button>

			<button class="btn btn-danger">
				<a href="{{ route('processos.index') }}" style="color: white; text-decoration: none;">Cancelar</a>
			</button>


			</form>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
