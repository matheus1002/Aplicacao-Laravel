@extends('layouts.app') 
 
@section('content')
	<div class="container">
		<h2 align="center">Adicionar Processo</h2>

		@include('admin._caminho')

		<div class="row">
			<form action="{{ route('processos.store') }}" method="post">
			
			{{ csrf_field() }}

			@include('admin.processos._formadicionar')

			<button class="btn btn-success">Adicionar</button>

			<button class="btn btn-danger">
				<a href="{{ route('processos.index') }}" style="color: white; text-decoration: none;">Cancelar</a>
			</button>


			</form>

			<div style="padding-bottom: 20px;"></div>

		</div>

	</div>

@endsection
