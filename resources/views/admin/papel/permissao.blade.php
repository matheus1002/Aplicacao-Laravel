@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 align="center">Lista de Permissões para {{$papel->nome}}</h2>

	@include('admin._caminho')

	<div class="row">
		<form action="{{route('papeis.permissao.store', $papel->id)}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<select name="permissao_id" class="form-control">	
				@foreach($permissao as $valor)
				<option value="{{$valor->id}}">{{$valor->nome}}</option>
				@endforeach
			</select>
		</div>
			<button class="btn btn-primary" style="margin-bottom: 15px;">Adicionar</button>
		</form>

	</div>
	<div class="row">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Permissão</th>
					<th>Descrição</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
			@foreach($papel->permissoes as $permissao)
				<tr>
					<td>{{ $permissao->nome }}</td>
					<td>{{ $permissao->descricao }}</td>
					<td>
						<form action="{{route('papeis.permissao.destroy',[$papel->id, $permissao->id])}}" method="post">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button title="Deletar" class="btn btn-danger"><i class="">delete</i></button>
						</form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>

	</div>

@endsection
