@extends('layouts.app')

@section('content') 

	<div class="container">
		<h2 align="center">Lista de Papéis</h2>

		@include('admin._caminho')
		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->nome }}</td>
						<td>{{ $registro->descricao }}</td>
						<td>
							<form action="{{route('papeis.destroy', $registro->id)}}" method="post">
								@can('papel-edit')
									<a title="Editar" class="btn btn-warning" href="{{ route('papeis.edit', $registro->id) }}"><i class="">edit</i></a>
									<a title="Permissões" class="btn btn-primary" href="{{route('papeis.permissao', $registro->id)}}"><i class="">lock_inline</i></a>
								@endcan
								@can('papel-delete')
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn btn-danger"><i class="">delete</i></button>
								@endcan
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			@can('papel-create')
				<a class="btn btn-primary" href="{{route('papeis.create')}}">Adicionar</a>
			@endcan 
		</div>
	</div>
@endsection