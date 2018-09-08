@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 align="center">Lista de Papéis para {{$usuario->name}}</h2>

	@include('admin._caminho')

	<div class="row">
		<form action="{{route('usuarios.papel.store', $usuario->id)}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<select name="papel_id" class="form-control">	
				@foreach($papel as $valor)
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
					<th>Papel</th>
					<th>Descrição</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
			@foreach($usuario->papeis as $papel)
				<tr>
					<td>{{ $papel->nome }}</td>
					<td>{{ $papel->descricao }}</td>
					<td>
						<form action="{{route('usuarios.papel.destroy',[$usuario->id, $papel->id])}}" method="post">
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
