@extends('layouts.app')  

@section('content')
	<div class="container">
		<h2 align="center">Lista de Infratores</h2>

		@include('admin._caminho') 

		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Vulgo</th>
						<th>Situação</th>
						<th>Ação</th>
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
							<form action="#" method="post"> 

								<!-- Modificar permissão aqui -->

									<a title="Visualizar" class="btn btn-success" href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

								@can('infrator-edit')
									<a title="Editar" class="btn btn-warning" href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
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
				<a class="btn btn-primary" href="{{route('infratores.create')}}">Adicionar</a>
			@endcan
				<a class="btn btn-danger" href="{{ url('admin') }}">Voltar</a>
		</div>
	</div>
@endsection