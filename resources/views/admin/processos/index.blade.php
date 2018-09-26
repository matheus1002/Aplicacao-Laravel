@extends('layouts.app')  

@section('content')
	<div class="container">
		<h2 align="center">Lista de Processos</h2>

		@include('admin._caminho') 

		<div class="row" style="padding-bottom: 25px;">
			<form action="{{ url('admin/processos/busca') }}" method="post">
				{{ csrf_field() }}		
				<div class="input-group">			
					<input type="text" class="form-control" id="busca" name="busca" placeholder="Digite o número do processo ou nome do infrator..." value="{{$buscar}}">
					<div class="input-group-btn">
						<button class="btn btn-success">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</form>
		</div>

		<div class="row">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Número</th>
						<th>Infrator</th>
						<th>Vítima</th>
						<th>Resultado</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					@foreach($processos as $processo)
						<tr>
							<td>{{ $processo->numeroDoProcesso }}</td>
							<td>{{ $processo->nomeDoInfrator }}</td>
							<td>{{ $processo->vitima }}</td>
							<td>{{ $processo->resultDoProc }}</td>

							<td>
								<form action="{{route('processos.destroy', $processo->id)}}" method="post"> 
									<!-- Modificar permissão aqui -->

									<a title="Visualizar" class="btn btn-success" href="{{ route('processos.show', $processo->id) }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

								@can('processo-edit')
									<a title="Editar" class="btn btn-warning" href="{{ route('processos.edit', $processo->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
								@endcan
								@can('processo-delete')
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button title="Deletar" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
								@endcan
								</form>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>

			<div class="row" align="center">
				{!! $processos !!}
			</div>

		</div>

		<div class="row">
			@can('processo-create')
				<a class="btn btn-primary" href="{{route('processos.create')}}">Adicionar</a>
			@endcan
				<a class="btn btn-danger" href="{{ url('admin') }}">Voltar</a>
		</div>
	</div>
@endsection