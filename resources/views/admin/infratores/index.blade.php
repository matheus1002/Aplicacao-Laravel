@extends('layouts.app')  

@section('content')
	<div class="container">
		<h2 align="center">Lista de Infratores</h2>

		@include('admin._caminho')

		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Vulgo</td>
						<td>Situacao</td>
						<td>Ação</td>
					</tr>
				</thead>
				<tbody>
					@foreach($infratores as $infrator)
						<tr>
							<td>{{ $infrator->id }}</td>
							<td>{{ $infrator->infpessoal->nome }}</td>
							<td>{{ $infrator->infpessoal->vulgo }}</td>
							<td>{{ $infrator->infprocessual->situacao }}</td>
							<td>
								<form action="{{route('infratores.destroy', $infrator->id)}}" method="post">

									<a title="Visualizar" class="btn btn-success" href="{{ route('infratores.show',$infrator->id) }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a>
								@can('infrator-edit')
									<a title="Editar" class="btn btn-warning" href="{{ route('infratores.edit',$infrator->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
								@endcan
								@can('infrator-delete')
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
								@endcan
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			<div class="row" align="center">
				{!! $infratores !!}
			</div>

		</div>

		<div class="row">
			@can('infrator-create')
				<a class="btn btn-primary" href="{{ route('infratores.create') }}">Adicionar</a>
			@endcan
				<a class="btn btn-danger" href="{{ url('admin') }}">Voltar</a>
		</div>

	</div>
@endsection